<?php


namespace App\Repositories;


use App\Product;

/**
 * Class ProductReposatiry
 * @package App\Repositories
 */
class ProductRepository extends BaseRepository implements IProductRepository
{
    /**
     * BrandRepository constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    /**
     * @param $request
     */
    public function createNewProduct($request)
    {
/*         $name = $request->file('brand_image')->store('brandImages'); */
        $data = $request->all();
       /*  $data['brand_image'] = $name; */
        $this->create($data);
    }

}
