<?php

namespace App\Http\Controllers\DashboardController;

use App\Http\Controllers\Controller;
use App\Repositories\ICategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private ICategoryRepository $categoryRepository;

    /**
     * CategoryController constructor.
     * @param ICategoryRepository $categoryRepository
     */
    public function __construct(ICategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $data['categories'] = $this->categoryRepository->get();
        return view('dashboard.category.index', $data);
    }
}
