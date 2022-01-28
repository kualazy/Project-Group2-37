<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey ="id_product";
    protected $table ="products";

    protected $fillable=[

    'name',
    'product_code',
    'price',
    'image'

    ];
    
}
