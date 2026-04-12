<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model for rows in the events table.
class Event extends Model
{
    use HasFactory;

    // Explicit table name so it is easy to trace.
    protected $table = 'events';

    // Fields allowed for mass assignment (create/update).
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'image_url',
        'event_date',
        'start_time',
        'end_time',
        'location',
        'event_type',
        'is_featured',
    ];

    // Automatic type conversion when reading/writing attributes.
    protected $casts = [
        'event_date' => 'date',
        'is_featured' => 'boolean',
    ];
}
