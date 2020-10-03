<?php


namespace App\Repositories;


interface IProductImageRepository
{
    public function insertProductImages($request, $productId);
}
