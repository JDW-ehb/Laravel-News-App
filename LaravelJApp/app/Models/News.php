<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'cover_image', 'content', 'publishing_date'];
    
    protected $casts = [
        'publishing_date' => 'datetime', // Cast as datetime
        // Other casts...
    ];
}