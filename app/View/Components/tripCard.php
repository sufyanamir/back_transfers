<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tripCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $img;
    public $title;
    public $desc;
    public function __construct($img, $title, $desc)
    {
        $this->img = $img;
        $this->title = $title;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.trip-card');
    }
}
