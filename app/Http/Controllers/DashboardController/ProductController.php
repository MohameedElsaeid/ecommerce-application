<?php

namespace App\Http\Controllers\DashboardController;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Repositories\IProductRepository;
use Illuminate\Http\Request;

class ProductConroller extends Controller
{


    /**
     * @var IProductRepository
     */
    private $product;
 /**
     * CategoryController constructor.
     * @param IProductRepository $categoryRepository
     */
    
    /* public function __construct(IProductRepository $productrepository )
    {
        $this->productrepository = $productrepository;
    } */

    /**
     * @return Application|Factory|View
     */

    public function index()
    {
        $data['products'] = $this->product->get();
        return view('dashboard.products.index', $data);
    }

    /**
     * @return Application|Factory|View
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
