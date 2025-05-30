<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'homes';
    protected $fillable = ['header_content', 'name', 'value', 'image', 'video'];
    

    // protected $casts = [
    //     'published_date' => 'datetime',
    // ];
}
