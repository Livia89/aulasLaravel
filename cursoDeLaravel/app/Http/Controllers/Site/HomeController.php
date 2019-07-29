<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD

use App\Course;
class HomeController extends Controller
{
    public function index(){
        $courses = Course::all();

        return view("home", compact('courses'));

=======
use App\Course;

class HomeController extends Controller
{
    public function index(){
        $courses = Course::paginate(2); // to create pagination

        return view('home', compact('courses'));
>>>>>>> 94486e7f70bae02aa18c199cea50e6913f5717a8
    }
}
