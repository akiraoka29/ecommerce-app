<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class Product extends Component
{
    /**
     * Category.
     *
     * @var string
     */
    public $categories;

    /**
     * Product.
     *
     * @var string
     */
    public $products;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categories, $products)
    {
        $this->categories = $categories;
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product.product');
    }
}
