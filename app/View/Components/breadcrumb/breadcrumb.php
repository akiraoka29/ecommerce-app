<?php

namespace App\View\Components\breadcrumb;

use Illuminate\View\Component;

class breadcrumb extends Component
{
    /**
     * List
     *
     * @var array
     */
    public $lists;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lists)
    {
        $this->lists = $lists;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb.breadcrumb');
    }
}
