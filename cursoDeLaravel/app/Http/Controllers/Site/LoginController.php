<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function auth(Request $req){

      $user = $req->all();

      /* To Authenticate */
      if(Auth::attempt(['email'=>$user['email'], 'password'=>$user['pass']])){
          return redirect()->route('admin.courses');

      }

      return redirect()->route('site.login');
    }

    public function loggout()
    {
        Auth::logout();
        return redirect()->route('site.home');

    }
}
