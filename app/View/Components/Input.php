<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $name;
    public $label;
    public $variable;


    public function __construct($type, $name, $label, $variable = 0)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->variable = $variable;

        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
