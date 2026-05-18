<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\LegalDocument;
use Illuminate\Auth\Access\HandlesAuthorization;

class LegalDocumentPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('view_any_legal_document');
    }

    public function view(AuthUser $authUser, LegalDocument $legalDocument): bool
    {
        return $authUser->can('view_legal_document');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('create_legal_document');
    }

    public function update(AuthUser $authUser, LegalDocument $legalDocument): bool
    {
        return $authUser->can('update_legal_document');
    }

    public function delete(AuthUser $authUser, LegalDocument $legalDocument): bool
    {
        return $authUser->can('delete_legal_document');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('delete_any_legal_document');
    }

    public function restore(AuthUser $authUser, LegalDocument $legalDocument): bool
    {
        return $authUser->can('restore_legal_document');
    }

    public function forceDelete(AuthUser $authUser, LegalDocument $legalDocument): bool
    {
        return $authUser->can('force_delete_legal_document');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('force_delete_any_legal_document');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('restore_any_legal_document');
    }

    public function replicate(AuthUser $authUser, LegalDocument $legalDocument): bool
    {
        return $authUser->can('replicate_legal_document');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('reorder_legal_document');
    }

}