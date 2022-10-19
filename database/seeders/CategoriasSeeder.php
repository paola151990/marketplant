<?php

namespace Database\Seeders;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'id'  => '1',
            'nombre' => 'Plantas Medicinales',
           
         
        ]);
        DB::table('categorias')->insert([
            'id'  => '2',
            'nombre' => 'Plantas Ornamentales',
           
         
        ]);
        DB::table('categorias')->insert([
            'id'  => '4',
            'nombre' => 'Herramientas',
           
         
        ]);
        DB::table('categorias')->insert([
            'id'  => '3',
            'nombre' => 'Semillas',
           
         
        ]);
        Categoria::factory(20)->create();
    }
}
