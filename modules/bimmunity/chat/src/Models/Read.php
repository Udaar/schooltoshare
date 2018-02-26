<?php

namespace Bimmunity\Chat\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Read
 *
 * @mixin \Eloquent
 */
class Read extends Model
{
	protected $fillable=['user_id','readable_type','readable_id','id'];
    /**
     * Get all of the owning likeable models.
     */
    public function readable()
    {
        return $this->morphTo();
    }
}
