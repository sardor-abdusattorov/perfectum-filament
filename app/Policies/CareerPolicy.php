<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Career;
use Illuminate\Auth\Access\HandlesAuthorization;

class CareerPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any_career');
    }

    public function view(AuthUser $authUser, Career $career): bool
    {
        return $authUser->can('view_career');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_career');
    }

    public function update(AuthUser $authUser, Career $career): bool
    {
        return $authUser->can('update_career');
    }

    public function delete(AuthUser $authUser, Career $career): bool
    {
        return $authUser->can('delete_career');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('delete_any_career');
    }

    public function restore(AuthUser $authUser, Career $career): bool
    {
        return $authUser->can('restore_career');
    }

    public function forceDelete(AuthUser $authUser, Career $career): bool
    {
        return $authUser->can('force_delete_career');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('force_delete_any_career');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('restore_any_career');
    }

    public function replicate(AuthUser $authUser, Career $career): bool
    {
        return $authUser->can('replicate_career');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_career');
    }

}