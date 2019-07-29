@extends('layout.masterPage')

@section('titulo', 'Admin Courses')


@section('content')

  <div class='container'>
      <h3 class='center'>List of courses</h3>
      <div class="row">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Publicated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allCourses as $course)
              <tr>
                 <td>{{$course->id}}</td>
                 <td>{{$course->nameCourse}}</td>
                 <td>{{$course->description}}</td>
                 <td><img width='120' src="{{asset($course->image)}}" alt='{{$course->nameCourse}}'/> </td>
                 <td>{{$course->publicated}}</td>
                 <td>
                      <a class='btn deep-orange' href="{{ route('admin.edit.courses', $course->id) }}">Edit</a>
                      <a class='btn red' href="{{ route('admin.delete.courses', $course->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
                 </td>
              </tr>

              @endforeach
            </tbody>
          </table>
      </div>

      <div>
          <a class='btn blue' href="{{route('admin.add.courses')}}">Add Course</a>
      </div>
  </div>

@endsection
