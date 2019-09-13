<?php

namespace App\Policies;

use App\User;
use App\classroom;
use Illuminate\Auth\Access\HandlesAuthorization;

class classroomPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any classrooms.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the classroom.
     *
     * @param  \App\User  $user
     * @param  \App\classroom  $classroom
     * @return mixed
     */
    public function view(User $user, classroom $classroom)
    {
        //
    }

    /**
     * Determine whether the user can create classrooms.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the classroom.
     *
     * @param  \App\User  $user
     * @param  \App\classroom  $classroom
     * @return mixed
     */
    public function update(User $user, classroom $classroom)
    {
        return $classroom->master_id == $user->id;
    }

    /**
     * Determine whether the user can delete the classroom.
     *
     * @param  \App\User  $user
     * @param  \App\classroom  $classroom
     * @return mixed
     */
    public function delete(User $user, classroom $classroom)
    {
        //
    }

    /**
     * Determine whether the user can restore the classroom.
     *
     * @param  \App\User  $user
     * @param  \App\classroom  $classroom
     * @return mixed
     */
    public function restore(User $user, classroom $classroom)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the classroom.
     *
     * @param  \App\User  $user
     * @param  \App\classroom  $classroom
     * @return mixed
     */
    public function forceDelete(User $user, classroom $classroom)
    {
        //
    }
}
