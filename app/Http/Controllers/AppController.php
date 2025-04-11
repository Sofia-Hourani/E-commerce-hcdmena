<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function courses()
    {
        $courses = Course::all();
        return view('courses', compact('courses'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');

        $courses = Course::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })->get();

        return view('courses', compact('courses'));
    }
}
