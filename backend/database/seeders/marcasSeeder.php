<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class marcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
        //Insertar registros a la tabla

        DB::table('marcas')->insert([
            [
                'Nombre'=> 'Guchi',
                'Detalle'=>'Pantalon',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'Nombre'=> 'Nike',
                'Detalle'=>'Tenis',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]

        ]);


    }
}
