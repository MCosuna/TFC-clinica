<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';
    // protected $primaryKey = 'email';//definimos como clave principal 'email'
    protected $fillable = ['name', 'email', 'message'];
}
