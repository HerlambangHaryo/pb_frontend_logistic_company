<?php

namespace App\View\Components\Apland_v512;

use Illuminate\View\Component;

class HeaderArea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $user_name;

    public function __construct($user_name)
    {
        // 
        $this->user_name = $user_name; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apland_v512.header-area');
    }
}
