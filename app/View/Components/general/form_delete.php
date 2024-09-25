<?php

namespace App\View\Components\general;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form_delete extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected $route, protected $id)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.general.form_delete', compact('route','id'));
    }
}
