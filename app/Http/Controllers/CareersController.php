<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\Career;
use App\Models\PageSetting;
use Illuminate\Contracts\View\View;

class CareersController extends Controller
{
    public function index(): View
    {
        $page = PageSetting::where('name', PageSettingKey::Careers)->first();

        $careers = Career::query()
            ->where('is_published', true)
            ->orderBy('sort')
            ->get();

        return view('pages.careers.index', compact('page', 'careers'));
    }

    public function show(string $slug): View
    {
        $page = PageSetting::get(PageSettingKey::Careers);

        $career = Career::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with('files')
            ->first();

        return view('pages.careers.show', compact('page', 'career'));
    }
}
