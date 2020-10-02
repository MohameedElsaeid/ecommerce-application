<?php

namespace App\Http\Controllers\DashboardController;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBrandRequest;
use App\Repositories\IBrandRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

/**
 * Class BrandController
 * @package App\Http\Controllers\DashboardController
 */
class BrandController extends Controller
{
    /**
     * @var IBrandRepository
     */
    private $brand;

    /**
     * BrandController constructor.
     * @param IBrandRepository $brandRepository
     */


    public function __construct(IBrandRepository $brandRepository)
    {
        $this->brand = $brandRepository;
    }

    /**
     * @return Application|Factory|View
     */


    public function index()
    {
        $brands = $this->brand->get();
        return view('dashboard.brands.index', ['brands' => $brands]);
    }

    /**
     * @return Application|Factory|View
     */


    public function create()
    {
        return view('dashboard.brands.create');
    }

    /**
     * @param CreateBrandRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateBrandRequest $request)
    {
        $this->brand->createNewBrand($request);
        return redirect(route('brand.index'))->with('success', 'Brand Created Successfully');
    }


    public function edit($brand_id)
    {
        $brand = Brand::with(['brand_image'])->find($brand_id);
        return view('dashboard.brands.edit', ['brand' => $brand]);
    }

    public function update()
    {

    }


}
