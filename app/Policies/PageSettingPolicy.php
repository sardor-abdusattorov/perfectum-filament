<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\PageSetting;
use Illuminate\Auth\Access\HandlesAuthorization;

class PageSettingPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any_page_setting');
    }

    public function view(AuthUser $authUser, PageSetting $pageSetting): bool
    {
        return $authUser->can('view_page_setting');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_page_setting');
    }

    public function update(AuthUser $authUser, PageSetting $pageSetting): bool
    {
        return $authUser->can('update_page_setting');
    }

    public function delete(AuthUser $authUser, PageSetting $pageSetting): bool
    {
        return $authUser->can('delete_page_setting');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('delete_any_page_setting');
    }

    public function restore(AuthUser $authUser, PageSetting $pageSetting): bool
    {
        return $authUser->can('restore_page_setting');
    }

    public function forceDelete(AuthUser $authUser, PageSetting $pageSetting): bool
    {
        return $authUser->can('force_delete_page_setting');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('force_delete_any_page_setting');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('restore_any_page_setting');
    }

    public function replicate(AuthUser $authUser, PageSetting $pageSetting): bool
    {
        return $authUser->can('replicate_page_setting');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_page_setting');
    }

}