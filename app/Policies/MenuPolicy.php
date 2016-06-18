<?php

namespace ProjectNpx\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use ProjectNpx\Menu;
use ProjectNpx\User;


class MenuPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    /*public function update(User $user, Menu $menu)
    {
        return $user->is_admin;
    }*/

}
