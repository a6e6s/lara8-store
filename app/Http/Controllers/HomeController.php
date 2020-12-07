<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //loading featured categories
        $categories = Category::where('featured', 1)->orderBy('created_at')->take(10)->get();
        //loading featured brandes
        $featured_products = Product::where('featured', 1)->where('status', 'active')->orderBy('created_at')->paginate(12);
        //loading featured brandes

        //loading view
        return view('frontend.home', ['categories' => $categories, 'featured_products' => $featured_products]);
    }
}
