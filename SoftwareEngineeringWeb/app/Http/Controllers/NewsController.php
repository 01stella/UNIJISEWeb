<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\NewsPost;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Throwable;

// Handles News page data composition.
class NewsController extends Controller
{
    // Returns the News view with posts and event collections.
    public function index()
    {
        return view('news', [
            'title' => 'News & Events',
            'featuredPost' => $this->featuredPost(),
            'latestPosts' => $this->latestPosts(),
            'pastEvents' => $this->pastEvents(),
        ]);
    }

    // Loads a highlighted news item when available.
    private function featuredPost(): ?NewsPost
    {
        try {
            if (!Schema::hasTable('news_posts')) {
                return null;
            }

            return NewsPost::query()
                ->where('is_featured', true)
                ->latest('published_at')
                ->first();
        } catch (Throwable) {
            return null;
        }
    }

    // Loads latest news list for the news panel.
    private function latestPosts(): Collection
    {
        try {
            if (!Schema::hasTable('news_posts')) {
                return collect();
            }

            return NewsPost::query()
                ->latest('published_at')
                ->limit(12)
                ->get();
        } catch (Throwable) {
            return collect();
        }
    }

    // Loads past events/exhibitions for the events panel.
    private function pastEvents(): Collection
    {
        try {
            if (!Schema::hasTable('events')) {
                return collect();
            }

            return Event::query()
                ->whereIn('event_type', ['past', 'exhibition'])
                ->latest('event_date')
                ->limit(12)
                ->get();
        } catch (Throwable) {
            return collect();
        }
    }
}
