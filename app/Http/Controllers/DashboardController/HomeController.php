<?php

namespace App\Http\Controllers\DashboardController;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['productsCount'] = Product::count();
        $data['brandsCount'] = Brand::count();
        $data['categoriesCount'] = Category::count();
        $data['usersCount'] = User::count();
        return view('dashboard.index', compact('data'));
    }
}
