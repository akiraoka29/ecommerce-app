<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Banners.
     *
     * @var string
     */
    public $banners;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($banners)
    {
        $this->banners = $banners;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero');
    }
}
