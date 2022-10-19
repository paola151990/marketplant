<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'  => '1',
            'name' => 'Pablo',
            'tipo_identificacion_id'=>'1',
            'identificacion'=> '123456789',
            'rol' => 'admin',
            'email' => 'pablo@gmail.com',
            'password' => bcrypt('123456'),
         
        ]);
        DB::table('users')->insert([
            'id'  => '2',
            'name' => 'paola',
            'tipo_identificacion_id'=>'2',
            'identificacion'=> '12345678',
            'rol' => 'admin',
            'email' => 'paola@gmail.com',
            'password' => bcrypt('123456'),
         
        ]);
        DB::table('users')->insert([
            'id'  => '3',
            'name' => 'Jaider',
            'tipo_identificacion_id'=>'3',
            'identificacion'=> '1234567890',
            'rol' => 'admin',
            'email' => 'jaider@gmail.com',
            'password' => bcrypt('123456'),
         
        ]);
     
        User::factory(10)->create();
    }
}
