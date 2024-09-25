<?php

namespace App\View\Components\Semester;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form_semester_include extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.semester.form_semester_include');
    }
}
