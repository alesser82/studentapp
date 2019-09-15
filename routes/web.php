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

// Route Student
Route::get('/student','StudentController@index');
Route::get('/student/create','StudentController@create');
Route::get('/student/{student}','StudentController@show');
Route::get('/student/{student}/edit','StudentController@edit');
Route::patch('/student/{student}','StudentController@update');
Route::post('student', 'StudentController@store');
Route::delete('student/{student}', 'StudentController@destroy');

Route::get('secret-page', [
    'as'    => 'secret',
    'uses'  => 'SecretController@secretPage'
]);

Route::get('showmesecret', 'SecretController@showMeSecret');
Route::get('date-mutator', 'StudentController@dateMutator');

//Insert Sample Data
// Route::get('sampledata', function ()
// {
//     DB::table('student')->insert([
//         [
//             'nisn'          => '1001',
//             'nama_siswa'    => 'Agus Yulianto',
//             'tanggal_lahir' => '1999-02-12',
//             'jenis_kelamin' => 'L',
//             'created_at'    => '2019-09-13 19:10:15',
//             'updated_at'    => '2019-09-13 19:10:15'
//         ],
//         [
//             'nisn'          => '1002',
//             'nama_siswa'    => 'Agustina Anggraeni',
//             'tanggal_lahir' => '1999-03-12',
//             'jenis_kelamin' => 'P',
//             'created_at'    => '2019-09-13 19:10:15',
//             'updated_at'    => '2019-09-13 19:10:15'
//         ],
//         [
//             'nisn'          => '1003',
//             'nama_siswa'    => 'Bayu Firmansyah',
//             'tanggal_lahir' => '1999-06-17',
//             'jenis_kelamin' => 'L',
//             'created_at'    => '2019-09-13 19:10:15',
//             'updated_at'    => '2019-09-13 19:10:15'
//         ],
//         [
//             'nisn'          => '1004',
//             'nama_siswa'    => 'Citra Rahmawati',
//             'tanggal_lahir' => '1999-12-12',
//             'jenis_kelamin' => 'P',
//             'created_at'    => '2019-09-13 19:10:15',
//             'updated_at'    => '2019-09-13 19:10:15'
//         ],
//         [
//             'nisn'          => '1005',
//             'nama_siswa'    => 'Dirgantara Laksana',
//             'tanggal_lahir' => '1999-10-10',
//             'jenis_kelamin' => 'L',
//             'created_at'    => '2019-09-13 19:10:15',
//             'updated_at'    => '2019-09-13 19:10:15'
//         ],
//         [
//             'nisn'          => '1006',
//             'nama_siswa'    => 'Eko Satrio',
//             'tanggal_lahir' => '1999-07-14',
//             'jenis_kelamin' => 'L',
//             'created_at'    => '2019-09-13 19:10:15',
//             'updated_at'    => '2019-09-13 19:10:15'
//         ],
//         [
//             'nisn'          => '1007',
//             'nama_siswa'    => 'Firda Ayu Larasati',
//             'tanggal_lahir' => '1999-02-02',
//             'jenis_kelamin' => 'P',
//             'created_at'    => '2019-09-13 19:10:15',
//             'updated_at'    => '2019-09-13 19:10:15'
//         ],
//         [
//             'nisn'          => '1008',
//             'nama_siswa'    => 'Galang Rambu Anarki',
//             'tanggal_lahir' => '1999-05-11',
//             'jenis_kelamin' => 'L',
//             'created_at'    => '2019-09-13 19:10:15',
//             'updated_at'    => '2019-09-13 19:10:15'
//         ],
//         [
//             'nisn'          => '1009',
//             'nama_siswa'    => 'Haris Purnomo',
//             'tanggal_lahir' => '1999-10-10',
//             'jenis_kelamin' => 'L',
//             'created_at'    => '2019-09-13 19:10:15',
//             'updated_at'    => '2019-09-13 19:10:15'
//         ],
//         [
//             'nisn'          => '1010',
//             'nama_siswa'    => 'Indra Prabowo',
//             'tanggal_lahir' => '1999-12-04',
//             'jenis_kelamin' => 'L',
//             'created_at'    => '2019-09-13 19:10:15',
//             'updated_at'    => '2019-09-13 19:10:15'
//         ],
//     ]);
// });

// Route::get('/secretpage', function()
// {
//     return "This secret's page";
// })->name('secret');

// Route::get('showmesecret', function()
// {
//     return redirect()->route('secret');
// });