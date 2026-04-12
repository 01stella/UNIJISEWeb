<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model for rows in the lecturers table.
class Lecturer extends Model
{
    use HasFactory;

    // Explicit table name so it is easy to trace.
    protected $table = 'lecturers';

    // Fields allowed for mass assignment (create/update).
    protected $fillable = [
        'full_name',
        'role_title',
        'photo_url',
        'bio',
        'is_head_of_program',
        'display_order',
    ];

    // Automatic type conversion when reading/writing attributes.
    protected $casts = [
        'is_head_of_program' => 'boolean',
    ];
}
