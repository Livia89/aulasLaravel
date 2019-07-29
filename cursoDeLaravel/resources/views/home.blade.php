@extends('layout.masterPage')

@section('titulo', 'Admin Courses')


@section('content')

  <div class='container'>
<<<<<<< HEAD
      <h3 class='center'>List of courses</h3>
      <div class="row">
          @foreach($courses as $course)
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="{{asset($course->image)}}">
                </div>
                <div class="card-content">
                  <span class="card-title">{{$course->nameCourse}}</span>
                  <p>{{$course->description}}</p>
                </div>
                <div class="card-action">
                  <a href="#">Ver mais...</a>
                </div>
              </div>
            </div>
          @endforeach
      </div>

  </div>
=======
      <h3 class='center'>All courses</h3>
      <div class="row">
      @foreach($courses as $course)
           <div class="col s12 m4">
             <div class="card">
               <div class="card-image">
                 <img width='120' src="{{asset($course->image)}}">
               </div>
               <div class="card-content">
                 <h2 style='color: #333;' class="card-title">{{$course->nameCourse}}</h2>
                 <p>{{$course->description}}</p>
               </div>
             </div>
           </div>
      @endforeach
    </div>

  </div>
    <div class="row" align="center">
        {{$courses->links()}}
    </div>
>>>>>>> 94486e7f70bae02aa18c199cea50e6913f5717a8

@endsection
