<?php

namespace App\View\Components\checkout;

use Illuminate\View\Component;

class checkout extends Component
{
    /**
     * User
     *
     * @var string
     */
    public $user;

    /**
     * Cart
     *
     * @var array
     */
    public $carts;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user,$carts)
    {
        $this->user = $user;
        $this->carts = $carts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.checkout.checkout');
    }
}
