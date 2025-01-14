<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Objetive extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $subtitle
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('Front.results.components.Objetive');
    }
}
