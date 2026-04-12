<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model for rows in the curriculum_courses table.
class CurriculumCourse extends Model
{
    use HasFactory;

    // Explicit table name so it is easy to trace.
    protected $table = 'curriculum_courses';

    // Fields allowed for mass assignment (create/update).
    protected $fillable = [
        'year_label',
        'year_order',
        'semester_label',
        'semester_order',
        'course_name',
        'course_order',
        'credits',
        'component_category',
    ];
}
