<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\News;
use App\Models\PageSetting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request): View
    {
        $page = PageSetting::where('name', PageSettingKey::News)->first();

        $year = $request->integer('year') ?: null;
        $month = $request->integer('month') ?: null;

        if ($month && ! $year) {
            $month = null;
        }

        $query = News::query()->where('is_published', true);

        if ($year) {
            $query->whereYear('published_at', $year);

            if ($month) {
                $query->whereMonth('published_at', $month);
            }
        }

        $news = $query
            ->select(['id', 'slug', 'title', 'description', 'image', 'is_published', 'published_at'])
            ->orderByDesc('published_at')
            ->paginate(12)
            ->withQueryString();

        $years = News::query()
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->pluck('published_at')
            ->map(fn ($date) => (int) $date->format('Y'))
            ->unique()
            ->sortDesc()
            ->values()
            ->all();

        return view('pages.news.index', compact('page', 'news', 'years', 'year', 'month'));
    }

    public function show(string $slug): View
    {
        $page = PageSetting::where('name', PageSettingKey::News)->first();

        $news = News::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->first();

        return view('pages.news.show', compact('page', 'news'));
    }
}
