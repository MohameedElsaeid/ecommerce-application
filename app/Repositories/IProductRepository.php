<?php


namespace App\Repositories;


interface IProductRepository
{
    public function get();
    public function createnewProduct($data);
}
