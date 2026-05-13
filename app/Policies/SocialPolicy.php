<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Social;
use Illuminate\Auth\Access\HandlesAuthorization;

class SocialPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any_social');
    }

    public function view(AuthUser $authUser, Social $social): bool
    {
        return $authUser->can('view_social');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_social');
    }

    public function update(AuthUser $authUser, Social $social): bool
    {
        return $authUser->can('update_social');
    }

    public function delete(AuthUser $authUser, Social $social): bool
    {
        return $authUser->can('delete_social');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('delete_any_social');
    }

    public function restore(AuthUser $authUser, Social $social): bool
    {
        return $authUser->can('restore_social');
    }

    public function forceDelete(AuthUser $authUser, Social $social): bool
    {
        return $authUser->can('force_delete_social');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('force_delete_any_social');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('restore_any_social');
    }

    public function replicate(AuthUser $authUser, Social $social): bool
    {
        return $authUser->can('replicate_social');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_social');
    }

}