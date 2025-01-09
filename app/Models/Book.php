<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'isbn',
        'title',
        'authors',
        'publisher',
        'published_date',
        'category',
        'pages',
        'image',
        'description',
        'quantity'
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);    
    }
}
