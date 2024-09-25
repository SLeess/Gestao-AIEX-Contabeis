<?php

namespace App\View\Components\Students;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class container_structure_crud_alunos extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected $contagem)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.students.container_structure_crud_alunos', compact('contagem'));
    }
}
