<?php

namespace App\View\Components\nav;

use Illuminate\View\Component;

class tab_content extends Component
{
    /**
     * Product.
     *
     * @var string
     */
    public $products;

    /**
     * Category.
     *
     * @var string
     */
    public $categories;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($products,$categories)
    {
        $this->products = $products;
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.tab_content');
    }
}
