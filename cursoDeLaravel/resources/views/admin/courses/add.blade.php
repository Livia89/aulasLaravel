@extends('layout.masterPage')

@section('titulo', 'Add Courses')


@section('content')


  <div class='container'>
      <h3 class='center'>Add course</h3>
      <div>
          <form class="" action="{{route('admin.save.courses')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              @include('admin.courses._form')
              <button class="btn deep-orange">Save</button>
          </form>
      </div>
  </div>
@endsection
