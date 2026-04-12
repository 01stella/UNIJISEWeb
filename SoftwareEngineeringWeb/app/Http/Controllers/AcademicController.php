<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

// Handles Academic page request.
class AcademicController extends Controller
{
    // Returns Academic page view with Download Center file metadata.
    public function index()
    {
        $downloadsDirectory = public_path('downloads');

        $downloadFiles = collect();

        if (File::isDirectory($downloadsDirectory)) {
            $downloadFiles = collect(File::files($downloadsDirectory))
                ->filter(fn ($file) => $file->isFile())
                ->sortBy(fn ($file) => $file->getFilename())
                ->values()
                ->map(function ($file) {
                    $extension = strtolower($file->getExtension());

                    return [
                        'title' => Str::of(pathinfo($file->getFilename(), PATHINFO_FILENAME))
                            ->replace(['-', '_'], ' ')
                            ->title()
                            ->toString(),
                        'filename' => $file->getFilename(),
                        'extension' => strtoupper($extension ?: 'FILE'),
                        'size_label' => $this->formatBytes((int) $file->getSize()),
                    ];
                });
        }

        return view('academic', [
            'title' => 'Academic Information',
            'downloadFiles' => $downloadFiles,
        ]);
    }

    // Streams one file from public/downloads as an attachment.
    public function download(string $file): BinaryFileResponse
    {
        $safeFilename = basename($file);
        $path = public_path('downloads/' . $safeFilename);

        abort_unless(File::exists($path) && File::isFile($path), 404);

        return response()->download($path, $safeFilename);
    }

    // Formats bytes into human-friendly labels (KB/MB/GB).
    private function formatBytes(int $bytes): string
    {
        if ($bytes < 1024) {
            return $bytes . ' B';
        }

        $units = ['KB', 'MB', 'GB'];
        $size = $bytes / 1024;
        $unitIndex = 0;

        while ($size >= 1024 && $unitIndex < count($units) - 1) {
            $size /= 1024;
            $unitIndex++;
        }

        return number_format($size, 1) . ' ' . $units[$unitIndex];
    }
}
