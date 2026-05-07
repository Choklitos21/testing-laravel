<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\book;
use App\Models\Editorial;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = book::class;

    public function definition()
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(50),

            'author_id' => Author::factory(),

            'editorial_id' => Editorial::factory(),
        ];
    }
}
