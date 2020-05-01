<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //modelo para tabla cliente
    //A continuación indicamos el nombre de la tabla
    protected $table = 'cliente';

   // protected $fillable = ['name'];//protege contra la asignacion masiva de forma predeterminada
    protected $primaryKey = 'dni';//definimos como clave principal 'dni'
    protected $incrementing = false; //No se autoincrementa
    protected $keyType = 'string';
    protected $fillable = ['dni', 'name', 'lname', 'phone','email', 'message']; //lista blanca de las cosas que podemos introducir 
    //en la base de datos.
}
