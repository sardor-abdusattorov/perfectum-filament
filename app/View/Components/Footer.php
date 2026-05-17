<?php

namespace App\View\Components;

use App\Models\Social;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */

    public $social_links;

    public function __construct()
    {
        $this->social_links = Social::where('is_published', true)
            ->orderBy('sort')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer', [
            'social_links' => $this->social_links,
        ]);
    }
}
