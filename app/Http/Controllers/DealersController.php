<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\Dealer;
use App\Models\PageSetting;
use Illuminate\Contracts\View\View;

class DealersController extends Controller
{
    public function index(): View
    {
        $page = PageSetting::where('name', PageSettingKey::Dealers)->first();

        $dealers = Dealer::query()
            ->where('is_published', true)
            ->select(['id', 'slug', 'title', 'description', 'image', 'is_published', 'sort'])
            ->orderBy('sort')
            ->paginate(12)
            ->withQueryString();

        return view('pages.dealers.index', compact('page', 'dealers'));
    }

    public function show(string $slug): View
    {
        $page = PageSetting::where('name', PageSettingKey::Dealers)->first();

        $dealer = Dealer::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with('files')
            ->first();

        return view('pages.dealers.show', compact('page', 'dealer'));
    }
}
