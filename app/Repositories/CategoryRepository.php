<?php


namespace App\Repositories;


use App\Category;

/**
 * Class CategoryReposateries
 * @package App\Repositories
 */

class CategoryRepository extends BaseRepository implements ICategoryRepository
{

     /**
     * BrandRepository constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->model = $category;
    }
     /**
     * @param $request
     */

    public function createNewcategory($request){
        $name = $request->file('category_image')->store('CategoryImages');
        $data = $request->all();
        $data['image'] = $name;
        $this->create($data);
    }
}
