<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    { 
        //Insertar registros a la tabla

        DB::table('productos')->insert([
            [
                'Nombre'=> 'Sudadera',
                'Precio'=>'120',
                'Marca'=>'Guchi',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'Nombre'=> 'Chaqueta',
                'Precio'=>'320',
                'Marca'=>'Halen',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
        ]);


    }
}
