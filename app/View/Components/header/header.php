<?php

namespace App\View\Components\header;

use Illuminate\View\Component;

class header extends Component
{
    /**
     * Categories
     *
     * @var string
     */
    public $categories;

    /**
     * Cart
     *
     * @var string
     */
    public $cart;

    /**
     * User
     *
     * @var object
     */
    public $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categories,$cart,$user)
    {
        $this->categories = $categories;
        $this->cart = $cart;
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header.header');
    }
}
