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
     * Display a listing of the resource.
     */
    public function showApplyForm($programId)
    {
        $program = Program::findOrFail($programId);
        return view('pages.apply_form', compact('program'));
    }

    public function submitApplication(Request $request)
    {
        $request->validate([
            'university_id' => 'required',
            'program_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'attachment' => 'required|file',
        ]);

        // Save the uploaded file
        $path = $request->file('attachment')->store('attachments');

        // Create a new application record
        $application = Application::create([
            'university_id' => $request->university_id,
            'program_id' => $request->program_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'attachment' => $path,
        ]);


        // Prepare data for email
        $data = $application->toArray();

        // Queue the email
        Mail::to('hello@mohamedhosny.com')->queue(new ApplicationSubmitted($data));

        // Return JSON response
        return response()->json(['success' => true, 'data' => $data]);
    }
}
