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

// Route::get('/', function () {
    // $page = 'homepage';
    // return view('pages/homepage', compact('page'));

// });
Route::get('/','PagesController@homepage');

Route::get('/about','PagesController@about');

Route::get('/student','StudentController@index');
Route::get('/student/create','StudentController@create');
Route::post('student', 'StudentController@store');

Route::get('secret-page', [
    'as'    => 'secret',
    'uses'  => 'SecretController@secretPage'
]);

Route::get('showmesecret', 'SecretController@showMeSecret');

// Route::get('/secretpage', function()
// {
//     return "This secret's page";
// })->name('secret');

// Route::get('showmesecret', function()
// {
//     return redirect()->route('secret');
// });