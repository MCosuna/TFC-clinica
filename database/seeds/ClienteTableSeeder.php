<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cliente')->insert([
            'name' => 'Mari carmen',
            'lname' => 'osuna',
            'dni' => 50627946,
            'email'=>'osunaojeda@gmail.com',
            'phone' =>'665854536',
            'message' =>'Esto es un registro de prueba',
        ]);
    }
}
