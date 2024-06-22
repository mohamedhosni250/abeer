<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationSubmitted;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function showApplyForm($programId)
    {
        $program = Program::findOrFail($programId);
        return view('pages.apply_form', compact('program'));
    }

    public function submitApplication(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'number' => 'required|string|max:15',
            'pic' => 'required|image|max:2048',
            'certificate1' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            'certificate2' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
            'certificate3' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        // Store files and get their paths
        $data['pic'] = $request->file('pic')->store('public/attachments');
        $data['certificate1'] = $request->file('certificate1')->store('public/attachments');
        $data['certificate2'] = $request->file('certificate2')->store('public/attachments');
        $data['certificate3'] = $request->file('certificate3')->store('public/attachments');

        // Generate absolute URLs for the files
        $data['pic_url'] = url(Storage::url($data['pic']));
        $data['certificate1_url'] = url(Storage::url($data['certificate1']));
        $data['certificate2_url'] = url(Storage::url($data['certificate2']));
        $data['certificate3_url'] = url(Storage::url($data['certificate3']));

        // Queue the email
        Mail::to('hello@mohamedhosny.com')->queue(new ApplicationSubmitted($data));

        // Return JSON response
        return response()->json($data);
    }
}
