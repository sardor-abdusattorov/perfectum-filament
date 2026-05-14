<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\PageBlock;
use Illuminate\Auth\Access\HandlesAuthorization;

class PageBlockPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any_page_block');
    }

    public function view(AuthUser $authUser, PageBlock $pageBlock): bool
    {
        return $authUser->can('view_page_block');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_page_block');
    }

    public function update(AuthUser $authUser, PageBlock $pageBlock): bool
    {
        return $authUser->can('update_page_block');
    }

    public function delete(AuthUser $authUser, PageBlock $pageBlock): bool
    {
        return $authUser->can('delete_page_block');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('delete_any_page_block');
    }

    public function restore(AuthUser $authUser, PageBlock $pageBlock): bool
    {
        return $authUser->can('restore_page_block');
    }

    public function forceDelete(AuthUser $authUser, PageBlock $pageBlock): bool
    {
        return $authUser->can('force_delete_page_block');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('force_delete_any_page_block');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('restore_any_page_block');
    }

    public function replicate(AuthUser $authUser, PageBlock $pageBlock): bool
    {
        return $authUser->can('replicate_page_block');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_page_block');
    }

}