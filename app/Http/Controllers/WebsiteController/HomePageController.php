<?php

namespace App\Http\Controllers\WebsiteController;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;

class HomePageController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_featured', 1)->get();
        $awesomeProducts = Product::with(['images'])->where('is_awesome', 1)->get();
        $brands = Brand::all();

        return view('website.index', [
            'categories' => $categories,
            'awesomeProducts' => $awesomeProducts,
            'brands' => $brands,
        ]);
    }

    public function show($productId)
    {
        $product = Product::with(['images', 'specification', 'comments'])->find($productId);
        return view('website.products.show', ['product' => $product]);
    }

}
