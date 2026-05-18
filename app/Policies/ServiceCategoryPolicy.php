<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\ServiceCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServiceCategoryPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any_service_category');
    }

    public function view(AuthUser $authUser, ServiceCategory $serviceCategory): bool
    {
        return $authUser->can('view_service_category');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_service_category');
    }

    public function update(AuthUser $authUser, ServiceCategory $serviceCategory): bool
    {
        return $authUser->can('update_service_category');
    }

    public function delete(AuthUser $authUser, ServiceCategory $serviceCategory): bool
    {
        return $authUser->can('delete_service_category');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('delete_any_service_category');
    }

    public function restore(AuthUser $authUser, ServiceCategory $serviceCategory): bool
    {
        return $authUser->can('restore_service_category');
    }

    public function forceDelete(AuthUser $authUser, ServiceCategory $serviceCategory): bool
    {
        return $authUser->can('force_delete_service_category');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('force_delete_any_service_category');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('restore_any_service_category');
    }

    public function replicate(AuthUser $authUser, ServiceCategory $serviceCategory): bool
    {
        return $authUser->can('replicate_service_category');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_service_category');
    }

}