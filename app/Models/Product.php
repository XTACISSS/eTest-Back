<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "product";

    protected $fillable = [
        'id', 
        'name',
        'url_image',
        'price',
        'discount',
        'category',
    ];

}
