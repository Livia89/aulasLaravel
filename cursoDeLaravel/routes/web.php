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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/contact/{id?}', function($id = null){
    echo $id;
    return view('contact');
});


// Where i will send the form
Route::post('/contact', function(){
    /*var_dump($_POST); */
    dd($_POST);
    return "contacto POST";
});


Route::put('/contact', function(){
    return "contacto PUT";
});
