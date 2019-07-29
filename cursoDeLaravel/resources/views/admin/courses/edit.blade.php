@extends('layout.masterPage')

<<<<<<< HEAD
@section('titulo', 'Edit Course')

@section('content')

<div class="container">
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

=======
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
>>>>>>> 94486e7f70bae02aa18c199cea50e6913f5717a8
@endsection
