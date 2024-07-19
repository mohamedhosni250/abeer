<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use App\Models\Department;
use App\Models\Post;
use App\Models\Program;
use App\Models\Review;
use App\Models\University;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $universities = University::where('is_featured', true)
            ->where('is_visible', true)
            ->get();
        $degrees = Degree::all();
        $departments = Department::all();
        $reviews = Review::all();
        $latestBlogs = Post::orderBy('created_at', 'desc')->take(3)->get();

        return view('home', compact('universities', 'degrees', 'departments', 'reviews', 'latestBlogs'));
    }

    public function search(Request $request)
    {
        $departments = Department::all();
        $degrees = Degree::all();
        $degreeId = $request->input('degree');
        $departmentId = $request->input('department');

        $programs = Program::where('degree_id', $degreeId)
            ->where('department_id', $departmentId)
            ->with('university')
            ->get()
            ->groupBy('university.name');

        return view('pages.search_results', compact('programs', 'degrees', 'departments'));
    }
}
