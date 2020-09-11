<?php

namespace App\Http\Controllers\WebsiteController;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;

class HomePageController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_featured', 1)->get();
        $awesomeProducts = Product::where('is_awesome', 1)->get();
        return view('index', [
            'categories' => $categories,
            'awesomeProducts' => $awesomeProducts
        ]);
    }
}
