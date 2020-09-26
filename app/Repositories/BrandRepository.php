<?php


namespace App\Repositories;


use App\Brand;

class BrandRepository implements IBrandRepository
{
    private $brandModel;

    public function __construct(Brand $brand)
    {
        $this->brandModel = $brand;
    }

    public function all()
    {
        return $this->brandModel->get();
    }

    public function create($request)
    {
        $name = $request->file('brand_image')->store('brandImages');
        $data = $request->all();
        $data['brand_image'] = $name;
        $this->brandModel->create($data);
    }

}
