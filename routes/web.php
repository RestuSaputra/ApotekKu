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
    return view('home');
});

//route CRUD Pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambahpegawai','PegawaiController@tambahpegawai');
Route::post('/pegawai/storepegawai', 'PegawaiController@storepegawai');
Route::get('/pegawai/editpegawai/{id}','PegawaiController@editpegawai');
Route::post('/pegawai/updatepegawai','PegawaiController@updatepegawai');
Route::get('/pegawai/hapuspegawai/{id}', 'PegawaiController@hapuspegawai');
Route::get('/pegawai/upload', 'PegawaiController@upload');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//route user
Route::get('/home','user@index');
Route::get('/login','user@login');
Route::post('/loginPost','user@loginPost');
Route::get('/register','user@register');
Route::post('/registerPost','user@registerPost');
Route::get('/logout','user@logout');

//route kasir
Route::get('/kasir/login', 'kasirLoginController@showLoginForm')->name('kasir.loginform');
Route::get('/kasir/register', 'kasirLoginController@showRegisterForm')->name('kasir.registerform');
Route::post('/kasir/login', 'kasirLoginController@login')->name('kasir.login');
Route::post('/kasir/register', 'kasirLoginController@register')->name('kasir.register');
Route::get('/kasir/home', 'kasirLoginController@index')->middleware('auth:kasir');
Route::get('/kasir/logout', 'kasirLoginController@logout')->name('kasir.logout');

//Route Admin
	//Pegawai
Route::get('/informasiPegawai','AdminController@informasiPegawai');
Route::get('/pegawai/editpegawai/{id}','AdminController@editpegawai');
Route::post('/pegawai/updatepegawai','AdminController@updatepegawai');
Route::get('/pegawai/hapuspegawai/{id}', 'AdminController@hapuspegawai');

	//Obat
Route::get('/informasiObat','AdminController@informasiObat');
Route::get('/informasiObat/tambahobat', 'AdminController@tambahobat');
Route::post('/informasiObat/storeobat', 'AdminController@storeobat');
Route::get('/informasiObat/editobat/{id}', 'AdminController@editobat');
Route::post('/informasiObat/updateobat', 'AdminController@updateobat');
Route::get('/informasiObat/hapusobat/{id}', 'AdminController@hapusobat');
Route::post('kembali', 'AdminController@kembali');