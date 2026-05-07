<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'title',
        'description'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }
}
