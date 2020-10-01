<?php

namespace App\Http\Controllers\DashboardController;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); 
      return   view('dashboard.products.index',[
          'products' =>$products,
      ]);
    }
}
