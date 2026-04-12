<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model for rows in the contact_submissions table.
class ContactSubmission extends Model
{
    use HasFactory;

    // Explicit table name so it is easy to trace.
    protected $table = 'contact_submissions';

    // Fields allowed for mass assignment (create/update).
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
