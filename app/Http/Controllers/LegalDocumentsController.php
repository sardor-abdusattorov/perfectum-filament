<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\LegalDocument;
use App\Models\PageSetting;
use Illuminate\Contracts\View\View;

class LegalDocumentsController extends Controller
{
    public function index(): View
    {
        $page = PageSetting::where('name', PageSettingKey::LegalDocuments)->first();

        $documents = LegalDocument::query()
            ->where('is_published', true)
            ->select(['id', 'slug', 'title', 'description', 'sort'])
            ->orderBy('sort')
            ->get();

        return view('pages.legal.index', compact('page', 'documents'));
    }

    public function show(string $slug): View
    {
        $page = PageSetting::where('name', PageSettingKey::LegalDocuments)->first();

        $document = LegalDocument::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with('files')
            ->first();

        return view('pages.legal.show', compact('page', 'document'));
    }
}
