<?php

namespace App\View\Components;

use Illuminate\Routing\Route;
use Illuminate\View\Component;

class Mainmenu extends Component
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
        return view('components.mainmenu');
    }

    public function menu()
    {
        return [
            ['title' => 'Home', 'url' => '/'],
            [
                'title' => 'blog',
                'url' => [
                    ['title' => 'Blog List', 'url' => 'blog'],
                    ['title' => 'Blog Single', 'url' => 'blog-single']
                ],
            ],
            [
                'title' => 'Shop',
                'url' => [
                    ['title' => 'Products', 'url' => 'products'],
                    ['title' => 'Product View', 'url' => 'product-single']
                ],
            ],
            ['title' => 'about', 'url' => 'about'],
            ['title' => 'contact', 'url' => 'contact'],
        ];
    }
}
