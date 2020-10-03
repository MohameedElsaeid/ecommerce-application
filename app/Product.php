<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'title',
        'price',
        'category_id',
        'available_count',
        'brief',
        'description',
        'is_awesome'
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'product_id');
    }

    public function specification()
    {
        return $this->hasOne(ProductSpecification::class, 'product_id', 'product_id');
    }

    public function comments()
    {
        return $this->hasMany(ProductComment::class, 'product_id', 'product_id');
    }


}
