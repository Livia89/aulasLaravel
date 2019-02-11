<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class HomeController extends Controller
{
    public function index(){
        $courses = Course::paginate(2); // to create pagination

        return view('home', compact('courses'));
    }
}
