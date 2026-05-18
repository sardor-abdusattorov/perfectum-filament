<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Dealer;
use Illuminate\Auth\Access\HandlesAuthorization;

class DealerPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any_dealer');
    }

    public function view(AuthUser $authUser, Dealer $dealer): bool
    {
        return $authUser->can('view_dealer');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_dealer');
    }

    public function update(AuthUser $authUser, Dealer $dealer): bool
    {
        return $authUser->can('update_dealer');
    }

    public function delete(AuthUser $authUser, Dealer $dealer): bool
    {
        return $authUser->can('delete_dealer');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('delete_any_dealer');
    }

    public function restore(AuthUser $authUser, Dealer $dealer): bool
    {
        return $authUser->can('restore_dealer');
    }

    public function forceDelete(AuthUser $authUser, Dealer $dealer): bool
    {
        return $authUser->can('force_delete_dealer');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('force_delete_any_dealer');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('restore_any_dealer');
    }

    public function replicate(AuthUser $authUser, Dealer $dealer): bool
    {
        return $authUser->can('replicate_dealer');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_dealer');
    }

}