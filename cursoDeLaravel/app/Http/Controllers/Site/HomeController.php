<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class HomeController extends Controller
{
    public function index(){
        $courses = Course::all();

        return view('home', compact('courses'));
    }
}
