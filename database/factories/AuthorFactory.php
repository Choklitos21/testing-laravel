<?php
namespace Database\Factories;

use App\Models\author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    protected $model = author::class;

    public function definition()
    {
        return [
            'names' => fake()->name(),
        ];
    }
}
