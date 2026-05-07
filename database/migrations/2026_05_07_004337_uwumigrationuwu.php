<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();

            $table->string('names');

            $table->timestamps();
        });

        Schema::create('editorials', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('country');

            $table->timestamps();
        });

        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('description');

            $table->foreignId('author_id')
                ->constrained();

            $table->foreignId('editorial_id')
                ->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
