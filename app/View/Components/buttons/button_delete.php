<?php

namespace App\View\Components\buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button_delete extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected $id)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.button_delete', compact('id'));
    }
}
