<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\Action;
use App\Models\PageSetting;
use Illuminate\Contracts\View\View;

class ActionsController extends Controller
{
    public function index(): View
    {
        $page = PageSetting::where('name', PageSettingKey::Actions)->first();

        $actions = Action::query()
            ->where('is_published', true)
            ->select(['id', 'slug', 'title', 'description', 'image', 'published_at', 'sort'])
            ->orderBy('sort')
            ->paginate(12)
            ->withQueryString();

        return view('pages.actions.index', compact('page', 'actions'));
    }

    public function show(string $slug): View
    {
        $page = PageSetting::where('name', PageSettingKey::Actions)->first();

        $action = Action::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with('files')
            ->first();

        return view('pages.actions.show', compact('page', 'action'));
    }
}
