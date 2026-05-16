<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\PageBlock;
use App\Models\PageSetting;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function contacts()
    {
        return $this->renderStatic(PageSettingKey::Contacts, 'pages.contacts');
    }

    public function about()
    {
        return $this->renderStatic(PageSettingKey::About, 'pages.about');
    }

    protected function renderStatic(PageSettingKey $key, string $view)
    {
        return view($view, [
            'page' => PageSetting::where('name', $key)->first(),
            'texts' => PageBlock::where('page', $key)
                ->where('is_published', true)
                ->get()
                ->keyBy('name'),
        ]);
    }
}
