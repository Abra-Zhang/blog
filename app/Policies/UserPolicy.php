<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /*
        检查被请求与当前用户是否一致
    */
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    /*
        检查是否拥有管理员权限
    */
    public function isAdmin(User $user)
    {
        return $user->is_admin;
    }

    /*
        检查是否拥有删除用户权限
    */
    public function destroy(User $currentUser, User $user)
    {
        return $currentUser->is_admin && $currentUser->id !== $user->id;
    }
}
