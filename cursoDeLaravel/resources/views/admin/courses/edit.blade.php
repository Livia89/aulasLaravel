@extends('layout.masterPage')

@section('titulo', 'Edit Courses')


@section('content')
  <div class='container'>
      <h3 class='center'>Edit course</h3>
      <div>
          <form class="" action="{{route('admin.update.courses', $course->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="put"> 
              @include('admin.courses._form')
              <button class="btn deep-orange">Update</button>
          </form>
      </div>
  </div>
@endsection
