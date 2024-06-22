<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Department;
use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $degrees = Degree::all();
        $departments = Department::all();

        return view('welcome', compact('degrees', 'departments'));
    }

    public function search(Request $request)
    {
        $degreeId = $request->input('degree');
        $departmentId = $request->input('department');

        $programs = Program::where('degree_id', $degreeId)
            ->where('department_id', $departmentId)
            ->with('university')
            ->get()
            ->groupBy('university.name');

        return view('pages.search_results', compact('programs'));
    }
}
