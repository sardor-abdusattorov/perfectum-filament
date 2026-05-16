<?php

namespace App\Http\Controllers;

use App\Enums\PageSettingKey;
use App\Models\PageBlock;
use App\Models\PageSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function contacts()
    {
        $page = PageSetting::where('name', PageSettingKey::Contacts)->first();

        $texts = PageBlock::where('page', PageSettingKey::Contacts)->get();

        return view('pages.contacts', compact('page', 'texts'));
    }
}
