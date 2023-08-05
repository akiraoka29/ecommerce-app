<?php

namespace App\View\Components\cart;

use Illuminate\View\Component;

class shopping_cart extends Component
{
    /**
     * Carts
     *
     * @var array
     */
    public $carts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($carts)
    {
        $this->carts = $carts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart.shopping_cart');
    }
}
