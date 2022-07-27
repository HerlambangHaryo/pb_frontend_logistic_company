<?php

namespace App\View\Components\Logistic;

use Illuminate\View\Component;

class ButtonDropdownOrder extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $route;
    public $id;

    public function __construct($route, $id)
    {
        //
        $this->route = $route;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.logistic.button-dropdown-order');
    }
}
