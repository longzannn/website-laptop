<?php

namespace App\Policies;

use App\Models\ChangePasswordLayout;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ChangePasswordLayoutPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ChangePasswordLayout $changePasswordLayout): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ChangePasswordLayout $changePasswordLayout): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ChangePasswordLayout $changePasswordLayout): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ChangePasswordLayout $changePasswordLayout): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ChangePasswordLayout $changePasswordLayout): bool
    {
        //
    }
}
