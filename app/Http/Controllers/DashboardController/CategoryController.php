<?php

namespace App\Http\Controllers\DashboardController;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;

    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'email' => 'required',
        ]);
        Category::create($request->all);
        return json_encode(array(
            "statusCode"=>200));
    }
}
