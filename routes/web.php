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
    $page = 'homepage';
    return view('pages/homepage', compact('page'));
});

Route::get('/about', function () {
    $page = 'about';
    return view('pages/about', compact('page'));
});

Route::get('/student', function () {
    $page = 'student';
    $students = ['Edd', 'John Marison', 'Mary Akh', 'Broke Lesnar'];
    return view('student/index', compact('page','students'));
});

Route::get('/secretpage',['as' => 'secret', function()
{
    return "This secret's page";
}]);

Route::get('showmesecret', function()
{
    return redirect()->route('secret');
});