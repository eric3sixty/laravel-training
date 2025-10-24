<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $description;
    public $id;
    public $photo_url;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title, string $description, string $id, string $photo_url = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->id = $id;
        $this->photo_url = $photo_url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
