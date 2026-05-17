<?php

namespace App\View\Components;

use App\Enums\MenuPosition;
use App\Models\Menu;
use App\Models\Social;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Footer extends Component
{
    public Collection $social_links;
    public Collection $footer_menus;

    public function __construct()
    {
        $this->social_links = Social::where('is_published', true)
            ->orderBy('sort')
            ->get();

        $this->footer_menus = Menu::query()
            ->where('position', MenuPosition::Footer->value)
            ->where('is_published', true)
            ->whereNotNull('footer_column')
            ->orderBy('sort')
            ->get()
            ->groupBy('footer_column');
    }

    public function render(): View|Closure|string
    {
        return view('components.footer', [
            'social_links' => $this->social_links,
            'footer_menus' => $this->footer_menus,
        ]);
    }
}
