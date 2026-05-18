<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\Faq;
use App\Models\PageSetting;
use Illuminate\Contracts\View\View;

class FaqController extends Controller
{
    public function index(): View
    {
        $page = PageSetting::where('name', PageSettingKey::Faq)->first();

        $faqs = Faq::query()
            ->where('is_published', true)
            ->orderBy('sort')
            ->get(['id', 'question', 'answer', 'sort']);

        return view('pages.faq', compact('page', 'faqs'));
    }
}
