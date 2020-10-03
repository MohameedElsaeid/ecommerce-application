<?php


namespace App\Repositories;


interface IProductRepository
{
    public function get();

    public function createProduct($request);
}
