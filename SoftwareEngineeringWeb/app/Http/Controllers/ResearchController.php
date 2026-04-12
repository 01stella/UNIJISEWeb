<?php

namespace App\Http\Controllers;

// Handles Research page request.
class ResearchController extends Controller
{
    // Returns static Research page view.
    public function index()
    {
        return view('research', [
            'title' => 'Research',
        ]);
    }
}
