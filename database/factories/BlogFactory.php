<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->sentence(),
            'imagen_blog'=>$this->faker->sentence(),
            'user_id'=>User::inRandomOrder()->first()->id,
        ];
    }
}
