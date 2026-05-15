<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\PageSetting;
use App\Models\Tender;
use Illuminate\Contracts\View\View;

class TendersController extends Controller
{
    public function index(): View
    {
        $page = PageSetting::where('name', PageSettingKey::Tenders)->first();

        $tenders = Tender::query()
            ->where('is_published', true)
            ->select(['id', 'slug', 'title', 'description', 'image', 'is_published', 'sort'])
            ->orderBy('sort')
            ->paginate(12)
            ->withQueryString();

        return view('pages.tenders.index', compact('page', 'tenders'));
    }

    public function show(string $slug): View
    {
        $page = PageSetting::where('name', PageSettingKey::Tenders)->first();

        $tender = Tender::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with('files')
            ->first();

        return view('pages.tenders.show', compact('page', 'tender'));
    }
}
