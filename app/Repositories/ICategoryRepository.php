<?php


namespace App\Repositories;


interface ICategoryRepository
{
    public function get();
    public function createNewCategory($data);

}
