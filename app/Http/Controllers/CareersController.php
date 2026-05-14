<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Contracts\View\View;

class CareersController extends Controller
{
    public function index(): View
    {
        $careers = Career::query()
            ->where('is_published', true)
            ->orderBy('sort')
            ->get();

        return view('pages.careers.index', compact('careers'));
    }

    public function show(string $slug): View
    {
        $career = Career::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with('files')
            ->firstOrFail();

        return view('pages.careers.show', compact('career'));
    }
}
