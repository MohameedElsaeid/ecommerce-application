<?php


namespace App\Repositories;


interface IBrandRepository
{
    public function get();
    public function createNewBrand($data);
}
