<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\PageSetting;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ServicesController extends Controller
{
    public function index(?string $categorySlug = null): View|RedirectResponse
    {
        $page = PageSetting::where('name', PageSettingKey::Services)->first();

        $categories = ServiceCategory::query()
            ->where('is_published', true)
            ->orderBy('sort')
            ->get(['id', 'slug', 'title', 'meta_title', 'meta_description', 'description', 'sort']);

        $activeCategory = $categorySlug
            ? $categories->firstWhere('slug', $categorySlug)
            : null;

        // /services → 301 to the first category so there is one canonical URL
        // per category instead of two pages serving the same content.
        if ($categorySlug === null && $categories->isNotEmpty()) {
            return redirect()->route('services.category', $categories->first()->slug, 301);
        }

        $activeCategory ??= $categories->first();

        $services = Service::query()
            ->where('is_published', true)
            ->when($activeCategory, fn ($q) => $q->where('service_category_id', $activeCategory->id))
            ->orderBy('sort')
            ->get(['id', 'service_category_id', 'slug', 'title', 'subtitle', 'icon', 'image', 'sort']);

        return view('pages.services.index', compact('page', 'categories', 'activeCategory', 'services'));
    }

    public function show(string $categorySlug, string $slug): View
    {
        $page = PageSetting::where('name', PageSettingKey::Services)->first();

        $service = Service::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->whereHas('category', fn ($q) => $q->where('slug', $categorySlug))
            ->with(['category', 'files'])
            ->first();

        return view('pages.services.show', compact('page', 'service'));
    }
}
