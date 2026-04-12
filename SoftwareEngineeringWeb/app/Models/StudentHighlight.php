<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model for rows in the student_highlights table.
class StudentHighlight extends Model
{
    use HasFactory;

    // Explicit table name so it is easy to trace.
    protected $table = 'student_highlights';

    // Fields allowed for mass assignment (create/update).
    protected $fillable = [
        'tab_key',
        'title',
        'badge',
        'description',
        'image_url',
        'meta_label',
        'secondary_meta',
        'page_number',
        'display_order',
    ];
}
