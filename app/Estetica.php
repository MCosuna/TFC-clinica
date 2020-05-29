<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estetica extends Model
{
    protected $table = "estetica";
    protected $fillable =
    [
        'email',
        'title',
        'shortdescription',
        'description'
    ];

}
