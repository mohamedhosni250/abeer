<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        return view('pages.universities');
    }
    public function show($id)
    {
        $university = University::with('programs.degree')->findOrFail($id);
        $degrees = $university->programs->groupBy('degree.name');
        $programs = $university->programs()->with('department')->paginate(9);
        return view('pages.university_single_page', compact('university', 'degrees', 'programs'));
    }
    public function loadMorePrograms(Request $request, $id)
    {
        $page = $request->get('page', 1);
        $university = University::findOrFail($id);
        $programs = $university->programs()->with('department')->paginate(9, ['*'], 'page', $page);

        return view('university.partials.programs', compact('programs'))->render();
    }
}
