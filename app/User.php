<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use SoftDeletes;
     // protected $connection= 'mysql_auth';
    public $table = 'users';

    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'phone',
        'cell_phone',
        'picture',
        'address',
        'password',
        'perent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Full_name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'cell_phone' => 'string',
        'address' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    // public function invoices()
    // {
    //     return $this->hasMany(\App\Models\Invoice::class);
    // }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    // public function Parent()
    // {
    //     return $this->belongsTo(\App\User::class,'id','perent_id');
    // }
    public function getParent($parent_id){
        $parent = User::find($parent_id);
        return $parent;
    }
    public function getTeam($parent_id){
        $team = User::where('perent_id','=',$parent_id)->get();
        $parent = User::where('id','=',$parent_id)->first();
        $team->push($parent);
        $team=$team->keyBy('id');
        $team->forget(\Auth::user()->id);
        return $team;
    }
    public function requests()
    {
        return $this->hasMany(\App\Models\Request::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tasks()
    {
        return $this->hasMany(\Bimmunity\Tasks\Models\Task::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tenantZoneRelations()
    {
        return $this->hasMany(\App\Models\TenantZoneRelation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function privileges()
    {
        return $this->belongsToMany(\App\Models\Privilege::class, 'users_has_privileges','users_id','previliges_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'users_has_roles','users_id','roles_id');
    }

    public function hasRole($role='')
    {
      if(is_string($role)){
            return $this->roles->contains('name',$role);
        }

        return !! $role->intersect($this->roles)->count();
    }
    public function hasPermission($permission='')
    {
        if($this->privileges->contains('name',$permission->name)){
            return true;
        }
        elseif($this->hasRole($permission->roles)){
            return true;
        }
        return false;
    }


    public function zones($permission='')
    {
        return $this->belongsToMany(\Bimmunity\Bimmodels\Models\Zone::class,'tenant_zone_relation', 'user_id', 'zone_id');
    }

    public function messages()
    {
        return $this->morphToMany('\Bimmunity\Chat\Models\Message', 'messageable');
    }
    public function notifications()
    {
        return $this->belongsToMany('\Bimmunity\Notification\Models\Notification', 'notification_user');
    }
    public function groups()
    {
        return $this->belongsToMany('\Bimmunity\Chat\Models\ChatGroup','group_members');
    }

    
    public function recentGroups()
    {
        return $this->groups;
    }

    // public function vendors()
    // {
    //     return $this->hasMany('App\Models\Vendor');
    // }

    public function buildings()
    {
        return $this->belongsToMany('Bimmunity\Bimmodels\Models\Building','facililtybuildings');
    }
    public function servicebuildings()
    {
        return $this->belongsToMany('Bimmunity\Bimmodels\Models\Building','serviceproviderbuildings');
    }
     protected $appends = array('encryptedMail','picture_url','facilityZones','facilityRequests','servicerequests','serviceZones');
    
    public function getEncryptedMailAttribute(){
        return encrypt($this->email);
    }
    public function getPictureUrlAttribute()
    {
        if($this->picture == null)
        {
            return null;
        }
        return  url('/').$this->picture;
    }
    public function getFacilityZonesAttribute(){
         $zones=$this->buildings->pluck('zones');
         $merged=collect();
        foreach ($zones as $zone){
            $merged=$merged->merge($zone);
        }
      return $merged;

    }
    public function getServiceZonesAttribute(){
         $zones=$this->servicebuildings->pluck('zones');
         $merged=collect();
        foreach ($zones as $zone){
            $merged=$merged->merge($zone);
        }
      return $merged;

    }
    public function getFacilityRequestsAttribute(){
         $requests=$this->facilityZones->pluck('requests');
         $merged=collect();
        foreach ($requests as $request){
            $merged=$merged->merge($request);
        }
      return $merged;

    }
    public function getServiceRequestsAttribute(){
        $requests=$this->serviceZones->pluck('requests');
         $merged=collect();
        foreach ($requests as $request){
            $merged=$merged->merge($request);
        }
      return $merged;
    

    }

    public function customers()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Customer::class);
    }
    public function expenses()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Expenses::class);
    }

    public function invoices()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Invoice::class);
    }

    public function payments()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Payment::class);
    }

    public function vendors()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Vendor::class);
    }
    public function employee(){
        return $this->hasOne('Bimmunity\HR\Models\Employee');
    }
    
    public function profile(){
        return $this->hasOne('\Bimmunity\Ticketing\Models\Profile');
    }
    
    public function comments()
    {
        return $this->hasMany(\Laravelista\Comments\Comments\Comment::class);
    }

    public static function getAuthor($id)
    {
        $user = User::find($id);
        return [
            'id'     => $user->id,
            'name'   => $user->name,
            'email'  => $user->email,
            'avatar' => $user->picture,
            'url'    => '#', // Default avatar
            'admin'  => $user->hasRole('admin'), // bool
        ];
    }

    public function portals()
    {
        return $this->belongsToMany('\Bimmunity\Authentication\Models\Portal', 'portal_user');
    }
    public function hassystem($system=''){
        if(is_string($system)){
            return $this->portals->contains('system_name',$system);
        }

        return !! $system->intersect($this->portals)->count();
    }

    public function pathPermission()
    {
        return $this->hasMany('App\PathPermission');
    }
    
    public function getPermession($path,$type)
    {
        
        if($type == false)
        {
            
            $item = \App\Models\Folder::where('path','=',$path)->first();
            
        }
        else
        {
            $item = \App\Models\File::where('path','=',str_replace(url('/'),"",$path))->first();   
        }
        if($item)
        {
            $permission = \App\PathPermission::where('user_id','=',$this->id)->where('path_id',$item->id)->first();
            if($permission)
                return $permission->permission;
            else
                return 0;
        }
        else
            return 0;

    }


    public function school(){
        return $this->hasOne('\Bimmunity\Bimmodels\Models\Building','owner_id');
    }

}

