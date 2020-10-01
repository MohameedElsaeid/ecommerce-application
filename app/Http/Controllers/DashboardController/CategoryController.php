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

    public function store()
    {
        $data=[];
        $data['title']=$_POST['title'];
        $data['description']=$_POST['description'];
        $data['category_image']=$_POST['category_image'];
        /* $category=Category::insert('insert into catgeories (title,description,category_image) values (?,?,?,?) []'); */


    }

}

