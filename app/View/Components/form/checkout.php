<?php

namespace App\View\Components\form;

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
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.checkout');
    }
}
