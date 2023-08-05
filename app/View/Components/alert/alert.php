<?php

namespace App\View\Components\alert;

use Illuminate\View\Component;

class alert extends Component
{
    /**
     * Alert Class
     *
     * @var string
     */
    public $class;

    /**
     * Alert Message
     *
     * @var string
     */
    public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class,$message)
    {
        $this->class = $class;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert.alert');
    }
}
