<?php

namespace App\View\Components\Frontend;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Slider extends Component
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
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.frontend.slider');
    }

    /**
     * loading slider from DB
     *
     * @return Object
     */
    function slider()
    {
        return DB::table('sliders')->get();
    }
}
