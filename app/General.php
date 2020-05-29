<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $table = "congeneral";
    protected $fillable =
    [
        'email',
        'title',
        'shortdescription',
        'description'
    ];

}
