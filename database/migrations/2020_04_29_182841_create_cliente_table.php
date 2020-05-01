<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
          // $table->id();
           $table->increments('dni');//clave primaria 
           $table->string('name');
           $table->string('lname');
           $table->string('email');
           $table->string('phone');
           $table->text('message')->nullable();

            $table->timestamps();

    //  $table->increments('dni');
    //     $table->string('name')->nullable();
    //     $table->string('lname')->nullable();
    //     $table->string('phone')->nullable();
    //     $table->string('email')->nullable();
    //     $table->text('message')->nullable();
    //     $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
