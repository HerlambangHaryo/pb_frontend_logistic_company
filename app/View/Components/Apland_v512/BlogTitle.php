<?php

namespace App\View\Components\Apland_v512;

use Illuminate\View\Component;

class BlogTitle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $title;
    public $date;
    public $kota;
    public $provinsi;
    public $namauser;

    public function __construct($id, $title, $date, $kota, $provinsi, $namauser)
    {
        // 
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->kota = $kota;
        $this->provinsi = $provinsi;
        $this->namauser = $namauser;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apland_v512.blog-title');
    }
}
