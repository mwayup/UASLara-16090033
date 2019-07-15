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

/**Route::get('/', function () {
    return view('welcome');
});**/

/**Route::get('/testing', function(){
	return view('coba');
});


Route::get('karyawan', function(){
	$karyawan=['Munar', 'Budi Santoso', 'Widya Ningrum', 'Unggul Jaya'];
	return view('pages.karyawan',compact('karyawan'));
});
Route::get('belajar','BelajarController@index');
Route::get('karyawan','BelajarController@index');**/

//Route::get('beranda', function(){
//	return view('pages.home');
//});
Route::get('profil', function(){
	return view('pages.about');
});

Route::get('form', function(){
	return view('pages.form');
});
Route::get('/', function(){
	return view('templates.default');
});
Route::get('/stats', function(){
	return view('pages.statistics');
});

Route::get('/beranda ', 'HomeController@index');

Route::get('/login', function(){
	return view('templates.login');
});
Route::get('/user', function(){
	return view('pages.user');
});
Route::get('/input', function(){
	return view('pages.user-input');
});

Route::get('/edit', function(){
	return view('pages.user-edit');
});

Route::get('/poli', function(){
	return view('pages.poli');
});
Route::get('/poliinput', function(){
	return view('pages.poli-input');
});

Route::get('/poliedit', function(){
	return view('pages.poli-edit');
});
Route::get('/pasieninput', function(){
	return view('pages.pasien-input');
});

Route::get('/pasien', function(){
	return view('pages.pasien');
});

Route::get('/pasienedit', function(){
	return view('pages.pasien-edit');
});
Route::get('/kunjungan', function(){
	return view('pages.kunjungan');
});
Route::get('/kunjunganinput', function(){
	return view('pages.kunjungan-input');
});

Route::get('/lapuser', function(){
	return view('laporan.laporan-user');
});

Route::get('/lappoli', function(){
	return view('laporan.laporan-poli');
});

Route::get('/lappasien', function(){
	return view('laporan.laporan-pasien');
});

Route::get('/lapkunj', function(){
	return view('laporan.laporan-kunjungan');
});

Route::get('/login', function(){
	return view('laporan.login');
});




Route::get('/form', function () {
    return view('form.blade.php');
});