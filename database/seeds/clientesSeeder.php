<?php

use Illuminate\Database\Seeder;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
    		DB::table('clientes')->insert([
    			'nif' => str_random(10),
    			'nombre' => str_random(10),
    			'apellido' => str_random(10),
    			'telefono' => str_random(10)
    		]);
    	}
    }
}
