<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'cover_image', 'content', 'publishing_date', 'summary'];
    
    protected $casts = [
        'publishing_date' => 'datetime', // Cast as datetime
        // Other casts...
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
