<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Course; // Acesso ao modelo course

class CourseController extends Controller
{
    public function index(){

        $allCourses = Course::all();

        return view('admin.courses.index', compact('allCourses'));
    }


    public function add(){
        return view('admin.courses.add');
    }
}
