<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LeadController extends Controller
{
    public function index()
    {
        return view('pages.leads');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'attachment' => 'required|file|mimes:pdf,doc,docx,jpg,png,jpeg|max:2048',
            'passport' => 'required|file|mimes:pdf,doc,docx,jpg,png,jpeg|max:2048',
        ]);

        try {
            $attachmentPath = $request->file('attachment')->store('attachments');
            $passportPath = $request->file('passport')->store('passports');

            Lead::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile_number' => $request->phone_number,
                'attachment' => $attachmentPath,
                'passport' => $passportPath,
            ]);

            return redirect()->back()->with('success', 'Lead created successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to create lead: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to create lead: ' . $e->getMessage())
                ->withInput();
        }
    }
}
