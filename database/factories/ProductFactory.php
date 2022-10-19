<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->sentence(),
            'precio'=>$this->faker->sentence(),
            'cantidad'=>$this->faker->sentence(),
            'usos'=>$this->faker->sentence(),
            'preparacion'=>$this->faker->sentence(),
            'beneficios'=>$this->faker->sentence(),
            'cuidados'=>$this->faker->sentence(),
            'ubicacion'=>$this->faker->sentence(),
            'tiempo_germinacion'=>$this->faker->sentence(),
            'imagen'=>$this->faker->sentence(),
            'user_id'=>User::inRandomOrder()->first()->id,
            'categoria_id'=>User::inRandomOrder()->first()->id,
        ];
    }
}
