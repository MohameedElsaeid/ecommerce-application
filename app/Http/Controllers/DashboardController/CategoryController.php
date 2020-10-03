<?php

namespace App\Http\Controllers\DashboardController;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Controllers\Controller;
use App\Repositories\ICategoryRepository;
use Illuminate\Http\Request;

/**
 * Class CategoryController
 * @package App\Http\Controllers\DashboardController
 */
class CategoryController extends Controller
{

    /**
     * @var ICategoryRepository
     */
    private  $categoryRepository;

    /**
     * CategoryController constructor.
     * @param ICategoryRepository $categoryRepository
     */
    public function __construct(ICategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return Application|Factory|View
     */


    public function index()
    {
        $data['categories'] = $this->categoryRepository->get();
        return view('dashboard.categories.index', $data);
    }
    /**
     * @return Application|Factory|View
     */


    public function create()
    {
        return view('dashboard.categories.create');
    }


    /**
     * @param CreateCategoryRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateCategoryRequest $request)
    {
        $this->categoryRepository->createNewCategory($request);
        return redirect(route('category.index'))->with('success', 'category Created Successfully');
    }
}
