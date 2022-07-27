<?php

namespace App\View\Components\Apland_v512;

use Illuminate\View\Component;

class SidebarFrontend extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $panel_name;

    public function __construct($id, $panel_name)
    {
        // 
        $this->id = $id; 
        $this->panel_name = $panel_name; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apland_v512.sidebar-frontend');
    }
}
