<?php


namespace App\Repositories;


use App\ProductImage;

class ProductImageRepository extends BaseRepository implements IProductImageRepository
{
    public function __construct(ProductImage $model)
    {
        $this->model = $model;
    }

    /**
     * @param $request
     * @param $proudctId
     */
    public function insertProductImages($request, $proudctId)
    {
        foreach ($request->file('product_images') as $productImage) {
            $productImageName = $productImage->store('productImages');
            $this->create([
                'product_id' => $proudctId,
                'image' => $productImageName
            ]);
        }
    }
}
