<?php

namespace App\Policies;

use App\User;
use App\Dossier;
use Illuminate\Auth\Access\HandlesAuthorization;

class DossierPolicy
{
    use HandlesAuthorization;

    public function before($user,$ability){
        if($user->is_admin){
            return true;
        }
    }

    /**
     * Determine whether the user can view the dossier.
     *
     * @param  \App\User  $user
     * @param  \App\Dossier  $dossier
     * @return mixed
     */
    public function view(User $user, Dossier $dossier)
    {
        return $user->id === $dossier->user_id;
    }

    public function show(User $user, Dossier $dossier)
    {
        return $user->id === $dossier->user_id;
    }

    /**
     * Determine whether the user can create dossiers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the dossier.
     *
     * @param  \App\User  $user
     * @param  \App\Dossier  $dossier
     * @return mixed
     */
    public function update(User $user, Dossier $dossier)
    {
        return $user->id === $dossier->user_id;
    }

    /**
     * Determine whether the user can delete the dossier.
     *
     * @param  \App\User  $user
     * @param  \App\Dossier  $dossier
     * @return mixed
     */
    public function delete(User $user, Dossier $dossier)
    {
        return $user->id === $dossier->user_id;
    }

    /**
     * Determine whether the user can restore the dossier.
     *
     * @param  \App\User  $user
     * @param  \App\Dossier  $dossier
     * @return mixed
     */
    public function restore(User $user, Dossier $dossier)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the dossier.
     *
     * @param  \App\User  $user
     * @param  \App\Dossier  $dossier
     * @return mixed
     */
    public function forceDelete(User $user, Dossier $dossier)
    {
        //
    }
}
