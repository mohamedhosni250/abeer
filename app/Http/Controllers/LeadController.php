<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

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
            'attachment' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);


        try {
            $path = $request->file('attachment')->store('attachments');
            Lead::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile_number' => $request->phone_number,
                'attachment' => $path,
            ]);

            return redirect()->back()->with('success', 'Lead created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create lead. Please try again.');
        }
    }
}
