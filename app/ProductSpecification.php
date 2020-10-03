<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    protected $fillable = [
        'product_id',
        'width',
        'height',
        'depth',
        'weight',
        'quality_checking',
        'freshness_Duration',
        'when_packeting',
        'each_box_contains'
    ];
}
