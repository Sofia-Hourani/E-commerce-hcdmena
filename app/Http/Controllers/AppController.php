<?php

namespace App\Http\Controllers;

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
        return view('courses');
    }
}
