<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = ['title', 'description', 'category', 'published_date', 'image'];
    

    protected $casts = [
        'published_date' => 'datetime',
    ];
}
