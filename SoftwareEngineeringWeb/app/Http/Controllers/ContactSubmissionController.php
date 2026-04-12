<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// Handles footer contact form submissions.
class ContactSubmissionController extends Controller
{
    // Validates and stores one contact message, then returns to previous page.
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'subject' => ['nullable', 'string', 'max:180'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator, 'contactSubmission')
                ->withInput()
                ->with('footer_open_form', true);
        }

        ContactSubmission::query()->create($validator->validated());

        return back()->with('contact_success', 'Your message has been sent successfully.');
    }
}
