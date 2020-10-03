<?php


namespace App\Repositories;


interface IProductSpecificationRepository
{
    public function createProductSpecification($data, $productId);
}
