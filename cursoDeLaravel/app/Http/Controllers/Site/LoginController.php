<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Auth; // Object to login validate

class LoginController extends Controller
{
    public function index(){
      return view('login.index');
    }

    public function entrar(Request $req){

        $data = $req->all();
        if(Auth::attempt(['email'=> $data['email'], 'password'=>$data['pass']])){
            return redirect()->route('admin.courses');
        }
      return redirect()->route('login.index');
=======
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

>>>>>>> 94486e7f70bae02aa18c199cea50e6913f5717a8
    }
}
