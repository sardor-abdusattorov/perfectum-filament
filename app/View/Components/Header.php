<?php

namespace App\View\Components;

use App\Enums\MenuPosition;
use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $topMenus;
    public $mainMenus;

    public function __construct()
    {
        $this->topMenus = Menu::where('is_published', true)
            ->where('position', MenuPosition::HeaderTop)
            ->whereNull('parent_id')
            ->with('children')
            ->orderBy('sort')
            ->get();

        $this->mainMenus = Menu::where('is_published', true)
            ->where('position', MenuPosition::HeaderMain)
            ->whereNull('parent_id')
            ->with('children')
            ->orderBy('sort')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header', [
            'topMenus' => $this->topMenus,
            'mainMenus' => $this->mainMenus,
        ]);
    }
}

