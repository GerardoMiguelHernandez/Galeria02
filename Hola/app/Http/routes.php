<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/* 

ruta que cacha el valor en la url

 Route::get('articule/{nombre}', function ($nombre) {
    echo "your name is" .$nombre;
});



poniendo nombre a la ruta y definiendo el controlador y el metodo que sera utilizado para dicha ruta

Route::get('article',[
   'as'=>'article_add',
   'uses'=>'Articles@index'
	]);



grupo de rutas

Route::group(['prefix'=> 'articles'], function(){

   Route::get('view/{article?}', function($article="vacio"){
      echo $article;
});
});

*/
Route::get('home', function () {
    return view('template.main');
});

Route::get('login', function () {
    return view('users.create');
});
Route::get('article',[
   'as'=>'article_add',
   'uses'=>'Articles@index'
	]);

Route::group(['prefix'=> 'articles'], function(){

   /*Route::get('view/{article?}', function($article="vacio"){
      echo $article;
});*/

Route::get('view/{id?}',[
   'as'=>'article_add',
   'uses'=>'Articles@index'
	]);
});

Route::group(['prefix'=>'admin'],function(){

Route::resource('users','UsersController');

Route::post('users/store','UsersController@store');
});