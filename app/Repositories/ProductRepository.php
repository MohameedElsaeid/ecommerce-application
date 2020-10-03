<?php


namespace App\Repositories;


use App\Product;
use App\ProductImage;

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
        $product = Product::create($request->all());
        foreach($request->file('brand_image') as $file){
            $name = $file ->store('productImages');
            ProductImage::create([
                'product_id' =>$product->product_id,
                'image'=> $name,
            ]);
        }
        $data['category_id'] = 1;
        /*  $data['brand_image'] = $name; */
        $this->create($data);
    }
}
