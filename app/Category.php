<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categroies';
    protected $fillable = [
        'title',
        'description',
        'image',
    ]; 
}
