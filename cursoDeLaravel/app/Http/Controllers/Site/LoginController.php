<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    }
}
