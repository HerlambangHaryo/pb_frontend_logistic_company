<?php

namespace App\View\Components\Apland_v512;

use Illuminate\View\Component;

class FooterBottom extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apland_v512.footer-bottom');
    }
}
