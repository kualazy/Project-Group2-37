<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primarykey ="id";
    protected $table ="employees";
    protected $fillable=[

    'name',
    'address',
    'E-mail',
    'Facebook',
    'line',
    'image'

    ];
}
