<?php

namespace App\Http\Controllers;

// Handles Academic page request.
class AcademicController extends Controller
{
    // Returns static Academic page view.
    public function index()
    {
        return view('academic', [
            'title' => 'Academic Information',
        ]);
    }
}
