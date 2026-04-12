<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model for rows in the news_posts table.
class NewsPost extends Model
{
    use HasFactory;

    // Explicit table name so it is easy to trace.
    protected $table = 'news_posts';

    // Fields allowed for mass assignment (create/update).
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'image_url',
        'category',
        'published_at',
        'is_featured',
    ];

    // Automatic type conversion when reading/writing attributes.
    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
    ];
}
