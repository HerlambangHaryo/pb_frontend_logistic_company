<?php

namespace App\View\Components\Apland_v512;

use Illuminate\View\Component;

class SidebarBackend extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */ 
    public $active;

    public function __construct($active)
    {
        // 
        $this->active = $active; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apland_v512.sidebar-backend');
    }
}
