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
                'Pais'=>'EE UU',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'Nombre'=> 'Halen',
                'Pais'=>'Canada',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]

        ]);


    }
}
