<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $primarykey ="id";
    protected $table ="jobs";
    protected $fillable=[

    'name',
    'image'

    ];
}
