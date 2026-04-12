<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\StudentHighlight;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Throwable;

// Handles Home page data composition.
class HomeController extends Controller
{
    // Returns the Home view with data needed by dynamic sections.
    public function index()
    {
        return view('home', [
            'title' => 'Home Page',
            'upcomingEvents' => $this->upcomingEvents(),
            'studentHighlights' => $this->studentHighlights(),
        ]);
    }

    // Loads upcoming events from DB if the table exists.
    // Falls back to an empty collection so the page still works pre-migration.
    private function upcomingEvents(): Collection
    {
        try {
            if (!Schema::hasTable('events')) {
                return collect();
            }

            return Event::query()
                ->where('event_type', 'upcoming')
                ->orderBy('event_date')
                ->limit(8)
                ->get();
        } catch (Throwable) {
            return collect();
        }
    }

    // Loads all student-section cards grouped by tab key.
    private function studentHighlights(): array
    {
        $emptyHighlights = [
            'orgs' => collect(),
            'achieve' => collect(),
            'acts' => collect(),
            'projs' => collect(),
        ];

        try {
            if (!Schema::hasTable('student_highlights')) {
                return $emptyHighlights;
            }

            $highlights = StudentHighlight::query()
                ->orderBy('display_order')
                ->get();

            return [
                'orgs' => $highlights->where('tab_key', 'orgs')->values(),
                'achieve' => $highlights->where('tab_key', 'achieve')->values(),
                'acts' => $highlights->where('tab_key', 'acts')->values(),
                'projs' => $highlights->where('tab_key', 'projs')->values(),
            ];
        } catch (Throwable) {
            return $emptyHighlights;
        }
    }
}
