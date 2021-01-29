<?php

use Illuminate\Support\Facades\Route;

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




Auth::routes();
Route::get('/', function () {
    return view('index');
});

Route::get('/about', 'PagesController@about');
//courses
Route::get('/courses', 'CoursesController@index');
Route::get('/courses/create', 'CoursesController@create');
Route::post('/courses','CoursesController@store');
Route::delete('/courses/{course}', 'CoursesController@destroy');
Route::get('/courses/{course}/edit', 'CoursesController@edit');
Route::patch('/courses/{course}', 'CoursesController@update');

//Students
 Route::get('/students', 'StudentsController@index');
 Route::get('/students/create', 'StudentsController@create');
 Route::get('/students/{student}', 'StudentsController@show');
 Route::post('/students', 'StudentsController@store');
 Route::delete('/students/{student}', 'StudentsController@destroy');
 Route::get('/students/{student}/edit', 'StudentsController@edit');
 Route::patch('/students/{student}', 'StudentsController@update');

 //Scores
 Route::get('/scores', 'ScoresController@index');
 Route::get('/scores/create', 'ScoresController@create');
 Route::get('/scores/{student}', 'ScoresController@show');
 Route::post('/scores', 'ScoresController@store');
 Route::get('/scores/lihat', 'ScoresController@lihat');
 Route::delete('/scores/{score}', 'ScoresController@destroy');
 Route::get('/students/{student}/edit', 'StudentsController@edit');
 Route::patch('/students/{student}', 'StudentsController@update');
 //

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/mahasiswa', 'Auth\LoginController@showMahasiswaLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/mahasiswa', 'Auth\RegisterController@showMahasiswaRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/mahasiswa', 'Auth\LoginController@mahasiswaLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/mahasiswa', 'Auth\RegisterController@createMahasiswa');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/mahasiswa', 'mahasiswa');



// Route::get('/home', 'HomeController@index')->name('home');
