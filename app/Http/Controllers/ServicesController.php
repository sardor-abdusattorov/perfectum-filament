<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\PageSetting;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Contracts\View\View;

class ServicesController extends Controller
{
    public function index(?string $categorySlug = null): View
    {
        $page = PageSetting::where('name', PageSettingKey::Services)->first();

        $categories = ServiceCategory::query()
            ->where('is_published', true)
            ->orderBy('sort')
            ->get(['id', 'slug', 'title', 'sort']);

        $activeCategory = $categorySlug
            ? $categories->firstWhere('slug', $categorySlug)
            : null;

        $activeCategory ??= $categories->first();

        $services = Service::query()
            ->where('is_published', true)
            ->when($activeCategory, fn ($q) => $q->where('service_category_id', $activeCategory->id))
            ->orderBy('sort')
            ->get(['id', 'service_category_id', 'slug', 'title', 'subtitle', 'icon', 'image', 'sort']);

        return view('pages.services.index', compact('page', 'categories', 'activeCategory', 'services'));
    }

    public function show(string $slug): View
    {
        $page = PageSetting::where('name', PageSettingKey::Services)->first();

        $service = Service::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with(['category', 'files'])
            ->first();

        return view('pages.services.show', compact('page', 'service'));
    }
}
