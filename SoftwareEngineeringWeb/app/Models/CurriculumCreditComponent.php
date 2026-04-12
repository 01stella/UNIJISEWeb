<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model for rows in the curriculum_credit_components table.
class CurriculumCreditComponent extends Model
{
    use HasFactory;

    // Explicit table name so it is easy to trace.
    protected $table = 'curriculum_credit_components';

    // Fields allowed for mass assignment (create/update).
    protected $fillable = [
        'component_name',
        'total_credits',
        'percentage',
        'color_key',
        'display_order',
    ];
}
