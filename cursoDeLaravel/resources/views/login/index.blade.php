@extends('layout.masterPage')

@section('titulo', 'Login')


@section('content')


  <div class='container'>
      <h3 class='center'>Log in</h3>
      <div>
          <form class="" action="{{route('site.login.auth')}}" method="post">
              {{ csrf_field() }}

              <div class="input-field">
                  <input type="text" name="email">
                  <label>Email</label>
              </div>
              <div class="input-field">
                  <input type="text" name="pass">
                  <label>Password</label>
              </div>
              <button class="btn deep-orange">Login</button>
          </form>
      </div>
  </div>
@endsection
