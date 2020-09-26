<?php


namespace App\Repositories;


interface IBrandRepository
{
    public function all();

    public function create($data);
}
