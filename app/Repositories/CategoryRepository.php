<?php


namespace App\Repositories;


use App\Category;

class CategoryRepository extends BaseRepository implements ICategoryRepository
{
    public function __construct(Category $category)
    {
        $this->model = $category;
    }
}
