<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\NumberFilter;
use Illuminate\Auth\Access\HandlesAuthorization;

class NumberFilterPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any_number_filter');
    }

    public function view(AuthUser $authUser, NumberFilter $numberFilter): bool
    {
        return $authUser->can('view_number_filter');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_number_filter');
    }

    public function update(AuthUser $authUser, NumberFilter $numberFilter): bool
    {
        return $authUser->can('update_number_filter');
    }

    public function delete(AuthUser $authUser, NumberFilter $numberFilter): bool
    {
        return $authUser->can('delete_number_filter');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('delete_any_number_filter');
    }

    public function restore(AuthUser $authUser, NumberFilter $numberFilter): bool
    {
        return $authUser->can('restore_number_filter');
    }

    public function forceDelete(AuthUser $authUser, NumberFilter $numberFilter): bool
    {
        return $authUser->can('force_delete_number_filter');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('force_delete_any_number_filter');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('restore_any_number_filter');
    }

    public function replicate(AuthUser $authUser, NumberFilter $numberFilter): bool
    {
        return $authUser->can('replicate_number_filter');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_number_filter');
    }

}