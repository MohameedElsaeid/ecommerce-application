<?php


namespace App\Repositories;


use App\Brand;

/**
 * Class BrandRepository
 * @package App\Repositories
 */
class BrandRepository extends BaseRepository implements IBrandRepository
{
    /**
     * BrandRepository constructor.
     * @param Brand $brand
     */
    public function __construct(Brand $brand)
    {
        $this->model = $brand;
    }

    /**
     * @param $request
     */
    public function createNewBrand($request)
    {
        $name = $request->file('brand_image')->store('brandImages');
        $data = $request->all();
        $data['brand_image'] = $name;
        $this->create($data);
    }

}
