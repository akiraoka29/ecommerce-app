<?php

namespace App\View\Components\nav;

use Illuminate\View\Component;

class tab extends Component
{
     /**
     * Tab
     *
     * @var string
     */
    public $categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.tab');
    }
}
