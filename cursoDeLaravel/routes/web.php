<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*  send a user to specific page
Route::get('/contact/{id?}', function($id = null){
    echo $id;
    return view('contact');
});
// Where i will send the form
Route::post('/contact', function(){
    //var_dump($_POST);
    dd($_POST);
    return "contacto POST";
});


Route::put('/contact', function(){
    return "contacto PUT";
});


*/
 // show Home 
Route::get('/', function () {
    return view('welcome');
});



Route::get('/contact/{id?}', ['uses'=>'ContactController@index']); // to send a user to determinated controller  -> nameController@method
Route::post('/contact', ['uses' => 'ContactController@create']);
Route::put('/contact', ['uses' => 'ContactController@update']);
