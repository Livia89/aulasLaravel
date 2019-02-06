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



/* Rotas do CRUD */
// GET - pedido ao servidor (obter dados do servidor) -> Requisição para listar / abrir uma página do servidor
// POST - Enviar dados para manipulação no servidor

// tentar ['as'=>'admin.courses'] => 'admin.courses'
Route::get('/admin/courses', ['as'=>'admin.courses', 'uses' => 'Admin\CourseController@index']); // Rota com alias (apelido), 1º argumento=alias, 2º o Controller a usar
Route::get('/admin/add', ['as'=>'admin.add.courses', 'uses' => 'Admin\CourseController@add']);
Route::post('/admin/save', ['as'=>'admin.save.courses', 'uses' => 'Admin\CourseController@save']);
Route::get('/admin/edit/{id}', ['as'=>'admin.edit.courses', 'uses' => 'Admin\CourseController@edit']);
Route::put('/admin/update/{id}', ['as'=>'admin.update.courses', 'uses' => 'Admin\CourseController@update']);
Route::get('/admin/delete/{id}', ['as'=>'admin.delete.courses', 'uses' => 'Admin\CourseController@delete']);
