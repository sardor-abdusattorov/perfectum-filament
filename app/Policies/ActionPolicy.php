<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Action;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActionPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any_action');
    }

    public function view(AuthUser $authUser, Action $action): bool
    {
        return $authUser->can('view_action');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_action');
    }

    public function update(AuthUser $authUser, Action $action): bool
    {
        return $authUser->can('update_action');
    }

    public function delete(AuthUser $authUser, Action $action): bool
    {
        return $authUser->can('delete_action');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('delete_any_action');
    }

    public function restore(AuthUser $authUser, Action $action): bool
    {
        return $authUser->can('restore_action');
    }

    public function forceDelete(AuthUser $authUser, Action $action): bool
    {
        return $authUser->can('force_delete_action');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('force_delete_any_action');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('restore_any_action');
    }

    public function replicate(AuthUser $authUser, Action $action): bool
    {
        return $authUser->can('replicate_action');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_action');
    }

}