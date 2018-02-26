<?php

namespace Bimmunity\Guest\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use Bimmunity\Ticketing\Models\Profile;
use App\User;
use App\Models\Role;
use App\Country;
use App\Http\Controllers\Controller;
use App\City;

class GuestController extends Controller
{
    public function guestindex(){
        return view('guest::guest');
    }
    public function AllCompanies(){
        $properties=Building::paginate(10);
        return view('guest::profile_partial',compact('properties'));
    }
    public function propertymanagementcompanies(){
        $properties= User::where('type','PM')->get();
        $type='Property Manager';
        return view('guest::guest_partial',compact('properties','type'));
    }
    public function facilitymanagementcompanies(){
        $properties= User::where('type','FM')->get();
        $type='Facility Manager';
        
        return view('guest::guest_partial',compact('properties','type'));
    }
    public function serviceProvidercompanies(){
        $properties= User::where('type','SP')->get();
        $type='Service Provider';
        return view('guest::guest_partial',compact('properties','type'));
    }
    public function seemore($type){
        $searchtype=$type;
        if($type=='Properties'){
            $properties= Building::all();
            $searchtype='Property';
            return view('guest::see-more',compact('properties','type','searchtype'));
        }
        else{
        
        $propertyMs=Role::with('users')->where('name', $type)->first();
        $properties= collect();
        $properties->push($propertyMs->users);
        $type= str_replace("Manager","Management Companies",$type);
        $type= str_replace("Provider","Provider Companies",$type);
        
         return view('guest::see-more',compact('properties','type','searchtype'));
        }
        
    }
    public function getcities($id){
        $cities = City::where('country_id','=',$id)->get();
        return view('guest::city',compact('cities'));
    }
    public function search($type,$country,$city,$name){
        if($type=='Property'){
            $properties= Building::where('country','=',Country::find($country)->name)
                                  ->where('city', $city)
                                  ->where('name', 'like', '%' . $name . '%')
                                  ->get();
            return view('guest::guest_partial_injected',compact('properties'));
        }else{
            $users= Profile::where('country', Country::find($country)->name)
                             ->where('city', $city)
                             ->get();
            $properties=collect();
            foreach($users as $user){
                if($user->user->name == $name)
                    $properties->push($user->user);
            }      
            return view('guest::guest_partial_injected_user',compact('properties','type'));
        }

    }
    public function testguest(){
        
            $user = User::first();
            $building = Building::first();

            $rating = $building->rating([
                'rating' => 5
            ], $user);

            return $rating;
    }
    public function show($type,$id,$domain=""){
        if($type=='Property'){
            $building = Building::find($id);
            return view('guest::property_profile',compact('building'));
        }
        else{
            $user= User::where('id',$id)->first();
            return view('guest::company_profile',compact('user'));
        }
    }
    

}