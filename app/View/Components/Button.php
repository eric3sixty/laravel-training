<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     */

    public $type;
    public $text;
    public $onclick;

    public function __construct(string $type, string $text, string $onclick = null)
    {
        $this->type = $type;
        $this->text = $text;
        $this->onclick = $onclick;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
