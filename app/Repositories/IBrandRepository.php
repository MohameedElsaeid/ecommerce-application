<?php


namespace App\Repositories;


interface IBrandRepository
{
    public function createNewBrand($data);

    public function createVendorBrand($date);
}
