<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $primaryKey ="id";
    protected $table ="promotions";
    
    protected $fillable=[

    'name',
    'content',
    'image'

    ];
}
