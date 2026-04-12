<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Throwable;

// Handles About page data composition.
class AboutController extends Controller
{
    // Returns About view with lecturer data when available.
    public function index()
    {
        return view('about', [
            'title' => 'About Us',
            'headOfProgram' => $this->headOfProgram(),
            'lecturers' => $this->lecturers(),
        ]);
    }

    // Retrieves the single lecturer marked as Head of Program.
    private function headOfProgram(): ?Lecturer
    {
        try {
            if (!Schema::hasTable('lecturers')) {
                return null;
            }

            return Lecturer::query()
                ->where('is_head_of_program', true)
                ->orderBy('display_order')
                ->first();
        } catch (Throwable) {
            return null;
        }
    }

    // Retrieves regular lecturers ordered for display.
    private function lecturers(): Collection
    {
        try {
            if (!Schema::hasTable('lecturers')) {
                return collect();
            }

            return Lecturer::query()
                ->where('is_head_of_program', false)
                ->orderBy('display_order')
                ->get();
        } catch (Throwable) {
            return collect();
        }
    }
}
