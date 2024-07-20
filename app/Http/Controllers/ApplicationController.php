<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationSubmitted;
use App\Models\Application;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    /**
     * Display the application form.
     */
    public function showApplyForm($programId)
    {
        $program = Program::findOrFail($programId);
        return view('pages.apply_form', compact('program'));
    }

    /**
     * Submit the application form.
     */
    public function submitApplication(Request $request)
    {
        $request->validate([
            'university_id' => 'required|integer|exists:universities,id',
            'program_id' => 'required|integer|exists:programs,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'attachment' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
            'passport' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);

        try {
            // Save the uploaded files
            $path = $request->file('attachment')->store('attachments');
            $passport_path = $request->file('passport')->store('passports');

            // Create a new application record
            $application = Application::create([
                'university_id' => $request->university_id,
                'program_id' => $request->program_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'attachment' => $path,
                'passport' => $passport_path,
            ]);

            // Prepare data for email
            $data = $application->toArray();

            // Queue the email
            Mail::to('hello@mohamedhosny.com')->queue(new ApplicationSubmitted($data));

            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to submit application. Please try again.');
        }
    }
}
