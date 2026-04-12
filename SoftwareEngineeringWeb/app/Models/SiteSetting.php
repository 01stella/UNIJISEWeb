<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model for global key-value configuration in site_settings.
class SiteSetting extends Model
{
    use HasFactory;

    // Explicit table name so it is easy to trace.
    protected $table = 'site_settings';

    // Fields allowed for mass assignment (create/update).
    protected $fillable = [
        'setting_key',
        'setting_value',
    ];
}
