<?php

namespace Database\Seeders;
use App\Models\Tipo_identificacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TipoIdentificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_identificacions')->insert([
            'id'  => '1',
            'nombre' => 'Cedula Ciudadania',
           
         
        ]);
        DB::table('tipo_identificacions')->insert([
            'id'  => '2',
            'nombre' => 'Tarjeta De Identidad',
           
         
        ]);
        DB::table('tipo_identificacions')->insert([
            'id'  => '3',
            'nombre' => 'Cedula De Extranjeria',
           
         
        ]);
        
         
       
    }

  }

