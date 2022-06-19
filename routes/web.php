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

//Cara 1
//  Route::get('/grid', function () {
//      return view('grid');
// });

// Route::get('product', 'controllerdata@prouduct');

// Route::get('/main', function () {
//     return view('main');
// });


// Route::get('/home', function () {
//     return view('homeuser');
// });

// Route::get('/account', function () {
//     return view('account');
// });

// Route::get('/product', function () {
//     return view('product');
// });

// Route::get('/reporting', function () {
//     return view('reporting');
// });

//  //Cara 2
//  Route::get('/grid', 'KontrollerBaru@grid');

//  Route::get('/form1/{hasil}', 'KontrollerBaru@form1');


//  //nomor 3
//  Route::get('/home', 'KontrollerBaru@home');

//  Route::get('/about', 'KontrollerBaru@about');

//  Route::get('/profile', 'KontrollerBaru@profile');

//  Route::get('/contact', 'KontrollerBaru@contact');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/koneksi', function () {
    return view('koneksi');
});

//kirim data user
Route::get('/login', 'AuthController@login')->name('login')->middleware('guest');

//login
Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');

//logout
Route::get('/logout', 'AuthController@logout')->middleware('auth');


Route::group(['middleware' => ['auth']], function(){

//home user
Route::get('/home', 'AuthController@homeuser');

//data mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');

Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');

//proses redirect ke halaman formulir
Route::get('/mahasiswa/formulirmhs', 'MahasiswaController@formulirmhs');

//proses untuk menyimpan data dari formulir ke tabel
Route::post('/mahasiswa/simpanmhs', 'MahasiswaController@simpanmhs');

//edit mahasiswa
Route::get('/mahasiswa/editmhs/{id}', 'MahasiswaController@editmhs');

//Simpan edit mahasiswa
Route::put('/mahasiswa/updatemhs/{id}', 'MahasiswaController@updatemhs');

//delete mahasiswa
Route::get('/mahasiswa/deletemhs/{id}', 'MahasiswaController@deletemhs');

//delete user
Route::get('/user/deleteuser/{id}', 'AuthController@deleteuser');

//data user
Route::get('/user', 'AuthController@user');

//formulir user
Route::get('/user/formuliruser', 'AuthController@formuliruser');

//kirim data user
Route::post('/user/simpanuser', 'AuthController@simpanuser');
});