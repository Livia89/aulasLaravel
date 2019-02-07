@extends('layout.masterPage')

@section('titulo', 'Admin Courses')


@section('content')


  <div class='container'>
      <h3 class='center'>Add course</h3>
      <div class="row">
          <form class="" action="{{route('admin.save.courses')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              @include('admin.courses._form')
              <button type="btn deep-orange" name="button">Save</button>
          </form>
      </div>

  </div>




@endsection
