<?php

namespace App\Http\Controllers;

use App\Models\CurriculumCourse;
use App\Models\CurriculumCreditComponent;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Throwable;

// Handles Curriculum page request.
class CurriculumController extends Controller
{
    // Returns Curriculum page with dynamic table-driven course data.
    public function index()
    {
        $creditComponents = $this->creditComponents();

        return view('curriculum', [
            'title' => 'Curriculum',
            'coursesByYear' => $this->coursesByYear(),
            'creditComponents' => $creditComponents,
            'totalCurriculumCredits' => $creditComponents->sum('total_credits'),
        ]);
    }

    // Builds a nested collection grouped by year then semester for the course panel.
    private function coursesByYear(): Collection
    {
        try {
            if (!Schema::hasTable('curriculum_courses')) {
                return collect();
            }

            $courses = CurriculumCourse::query()
                ->orderBy('year_order')
                ->orderBy('semester_order')
                ->orderBy('course_order')
                ->get();

            return $courses
                ->groupBy('year_label')
                ->map(function (Collection $yearCourses, string $yearLabel) {
                    $semesters = $yearCourses
                        ->groupBy('semester_label')
                        ->map(function (Collection $semesterCourses) {
                            $hasNumericCredits = $semesterCourses->contains(fn (CurriculumCourse $course) => !is_null($course->credits));
                            $totalCredits = $semesterCourses->sum(fn (CurriculumCourse $course) => (int) ($course->credits ?? 0));

                            return collect([
                                'semester_label' => $semesterCourses->first()->semester_label,
                                'semester_order' => $semesterCourses->first()->semester_order,
                                'credits_label' => $hasNumericCredits ? ($totalCredits . ' SKS') : 'Extension',
                                'courses' => $semesterCourses->values(),
                            ]);
                        })
                        ->sortBy('semester_order')
                        ->values();

                    return collect([
                        'year_label' => $yearLabel,
                        'year_order' => $yearCourses->first()->year_order,
                        'semesters' => $semesters,
                    ]);
                })
                ->sortBy('year_order')
                ->values();
        } catch (Throwable) {
            return collect();
        }
    }

    // Loads credit component summary rows for the credit system panel.
    private function creditComponents(): Collection
    {
        try {
            if (!Schema::hasTable('curriculum_credit_components')) {
                return collect();
            }

            return CurriculumCreditComponent::query()
                ->orderBy('display_order')
                ->get();
        } catch (Throwable) {
            return collect();
        }
    }
}
