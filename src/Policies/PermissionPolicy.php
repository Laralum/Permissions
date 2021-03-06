<?php

namespace Laralum\Permissions\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Laralum\Users\Models\User;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Filters the authoritzation.
     *
     * @param mixed $user
     * @param mixed $ability
     */
    public function before($user, $ability)
    {
        if (User::findOrFail($user->id)->superAdmin()) {
            return true;
        }
    }

    /**
     * Determine if the current user can access permissions moule.
     *
     * @param mixed $user
     *
     * @return bool
     */
    public function access($user)
    {
        return User::findOrFail($user->id)->hasPermission('laralum::permissions.access');
    }

    /**
     * Determine if the current user can create permissions.
     *
     * @param mixed $user
     *
     * @return bool
     */
    public function create($user)
    {
        return User::findOrFail($user->id)->hasPermission('laralum::permissions.create');
    }

    /**
     * Determine if the current user can update permissions.
     *
     * @param mixed $user
     *
     * @return bool
     */
    public function update($user)
    {
        return User::findOrFail($user->id)->hasPermission('laralum::permissions.update');
    }

    /**
     * Determine if the current user can delete permissions.
     *
     * @param mixed $user
     *
     * @return bool
     */
    public function delete($user)
    {
        return User::findOrFail($user->id)->hasPermission('laralum::permissions.delete');
    }
}
