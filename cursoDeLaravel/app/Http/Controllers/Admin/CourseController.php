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

    public function save(Request $req){

          $newCourse = $req->all();

          // Verificar se tem uma imagem vindo do post
<<<<<<< HEAD
=======

>>>>>>> 94486e7f70bae02aa18c199cea50e6913f5717a8
          if($req->hasFile('image')){
              $image = $req->file('image');
              $num = rand(1111,9999);
              $dir = 'images/courses';
              $ext = $image->guessClientExtension(); // get extension
              $nameImage = "image_".$num.".".$ext;
              $image->move($dir, $nameImage); // mover a imagem que recebemos do form
              $newCourse['image'] = $dir. "/".$nameImage;

          }

          if(isset($newCourse['publicated'])){
              $newCourse["publicated"] = 'sim';
          }else{
              $newCourse["publicated"] = 'nao';
          }

            Course::create($newCourse);

            return redirect()->route('admin.courses');
    }

    public function edit($id){
<<<<<<< HEAD

        $course = Course::find($id);

        return view('admin.courses.edit', compact("course"));

=======
        $course = Course::find($id);

        return view("admin.courses.edit", compact('course'));
>>>>>>> 94486e7f70bae02aa18c199cea50e6913f5717a8
    }


    public function update(Request $req, $id){
<<<<<<< HEAD
        $course = $req->all();


        if(isset($course['publicated'])){
            $course["publicated"] = 'sim';
        }else{
            $course["publicated"] = 'nao';
        }

        // Verificar se tem uma imagem vindo do post
        if($req->hasFile('image')){
            $image = $req->file('image');
            $num = rand(1111,9999);
            $dir = 'images/courses';
            $ext = $image->guessClientExtension(); // get extension
            $nameImage = "image_".$num.".".$ext;
            $image->move($dir, $nameImage); // mover a imagem que recebemos do form
            $course['image'] = $dir. "/".$nameImage;

        }

          Course::find($id)->update($course);

          return redirect()->route('admin.courses');


    }

    public function delete($id){
          Course::find($id)->delete();

         return redirect()->route("admin.courses");
    }
=======

      $course = $req->all();
      dd($course);
      if($req->hasFile('image')){
          $image = $req->file('image');
          $num = rand(1111,9999);
          $dir = 'images/courses';
          $ext = $image->guessClientExtension();
          $nameImage = 'image_' . $num.".".$ext;
          $image->move($dir, $nameImage);
          $course['image'] = $dir . '/' . $nameImage;
        }

        if(isset($course['publicated'])){
          $course['publicated'] = 'sim';
        }else{
          $course['publicated'] = 'nao';
        }

        Course::find($id)->update($course);

        return redirect()->route('admin.courses');

    }


    public function delete($id){
        Course::find($id)->delete();

        return redirect()->route('admin.courses');
    }


>>>>>>> 94486e7f70bae02aa18c199cea50e6913f5717a8
}
