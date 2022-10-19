<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipoIdentificacionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(BlogSeeder::class);
    }
}
