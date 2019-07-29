@extends('layout.masterPage')

@section('titulo', 'Admin Courses')


@section('content')

  <div class='container'>
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

@endsection
