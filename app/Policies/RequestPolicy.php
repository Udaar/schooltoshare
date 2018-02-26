<?php

namespace App\Policies;

use App\User;
use \Bimmunity\Ticketing\Models\Request;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the request.
     *
     * @param  \App\User  $user
     * @param  \Bimmunity\Ticketing\Models\Request  $request
     * @return mixed
     */
    public function before($user, $ability)
    {
        return false;
    }

    public function view(User $user, Request $request)
    {
        return true;
    }

    /**
     * Determine whether the user can create requests.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the request.
     *
     * @param  \App\User  $user
     * @param  \Bimmunity\Ticketing\Models\Request  $request
     * @return mixed
     */
    public function update(User $user, Request $request)
    {
        //
    }

    /**
     * Determine whether the user can delete the request.
     *
     * @param  \App\User  $user
     * @param  \Bimmunity\Ticketing\Models\Request  $request
     * @return mixed
     */
    public function delete(User $user, Request $request)
    {
        //
    }
}
