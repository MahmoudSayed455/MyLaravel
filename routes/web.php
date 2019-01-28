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




// Members Project
/*
Route::get('/' ,'aboutcontroller@homefunc' );
Route::get('/home1' ,'aboutcontroller@homefunc' );
Route::get('/about' ,'aboutcontroller@aboutfunc' );
Route::get('/contact' ,'contactcontroller@contactfunc' );
Route::get('/members' ,'CrudController@select' );
Route::get('/addmember' ,'CrudController@addmember');
Route::post('/add' ,'CrudController@insert');
Route::get('/members/{id}/delete' ,'CrudController@delete');
Route::get('/members/{id}/edit' ,'CrudController@edit');
Route::post('/members/{id}/update' ,'CrudController@update');
*/

// Template Project

Route::get('/' ,'MyControll@select');
Route::get('/index' ,'MyControll@select');
Route::get('/about' ,'MyControll@about');
Route::get('/post' ,'MyControll@sample');
Route::get('/contact' ,'MyControll@contact');
Route::post('/sentMessage' ,'MyControll@insert'); // ->middleware('CheckName');
Route::get('/posts/{id}/delete' ,'MyControll@delete');
Route::get('/posts/{id}/edit' ,'MyControll@edit');
Route::post('/posts/{id}/update' ,'MyControll@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/register', function (){
    return view('register');
});
Auth::routes();
Route::get('/error' ,function (){
    return('الاسم محجوز');
});

Route::get('/home', 'HomeController@index')->name('home');
