<?php

namespace App\Http\Controllers\DashboardController;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Repositories\IProductRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductController extends Controller
{


    /**
     * @var IProductRepository
     */
    private $productRepository;

    /**
     * CategoryController constructor.
     * @param IProductRepository $productRepository
     */

    public function __construct(IProductRepository $productRepository)
    {
        $this->productrepository = $productRepository;
    }

    /**
     * @return Application|Factory|View
     */

    public function index()
    {
        $data['products'] = $this->productrepository->get();
        return view('dashboard.products.index', $data);
    }

    /**
     * @return Application|Factory|View
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * @param CreateProductRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateProductRequest $request)
    {
        $this->brand->createnewProduct($request);
        return redirect(route('product.index'))->with('success', 'Product Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
