<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Post2;
use App\Models\User;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    //public function viewAny(User $user): bool
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    // public function view(User $user, Post2 $post2): bool
    public function view(User $user, Post2 $post2)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    // public function create(User $user): bool
    public function create(User $user)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can update the model.
     */
    // public function update(User $user, Post2 $post2): bool
    public function update(User $user, Post2 $post2)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can delete the model.
     */
    // public function delete(User $user, Post2 $post2): bool
    public function delete(User $user, Post2 $post2)
    {
        return $user->is_admin;
    }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(User $user, Post2 $post2): bool
    public function restore(User $user, Post2 $post2)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    // public function forceDelete(User $user, Post2 $post2): bool
    public function forceDelete(User $user, Post2 $post2)
    {
        //
    }
}
