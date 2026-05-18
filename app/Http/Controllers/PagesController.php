<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function show(string $section, string $slug): View
    {
        $page = Page::query()
            ->where('section', $section)
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with('files')
            ->firstOrFail();

        $view = "pages.{$page->template}";

        return view(view()->exists($view) ? $view : 'pages.default', compact('page'));
    }
}
