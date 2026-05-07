<?php

namespace Database\Factories;

use App\Models\editorial;
use Illuminate\Database\Eloquent\Factories\Factory;

class EditorialFactory extends Factory
{
    protected $model = editorial::class;

    public function definition()
    {
        return [
            'name' => fake()->company(),
            'country' => fake()->country(),
        ];
    }
}
