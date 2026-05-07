<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Editorial;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::factory(1000)->create();

//        Author::factory(10)->create();
//        Book::factory(20)->create();
//        Editorial::factory(10)->create();
            User::Factory()->count(10)->create();
//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
