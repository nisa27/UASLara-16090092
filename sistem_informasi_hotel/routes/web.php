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
 
Route::delete('kamar/{kamar}', 'KamarController@destroy');
Route::group(['middleware' => ['web']], function(){
#FrontEnd	
	Route::get('cetak_pdf', 'FrontEndController@cetak_pdf');
	Route::get('get-pesan', 'FrontEndController@pesan');
	Route::get('table', function () {
	    return view('back-end.table');
	});
	Route::get('/','FrontEndController@FrontEnd');
	Route::get('detail_kamar/{kamar}', 'FrontEndController@show');
	Route::get('rooms', 'FrontEndController@rooms');
	Route::get('fiture', 'FrontEndController@fiture');
	Route::get('about', function () {
	    return view('front-end.about');
	});
	Route::get('contact', function () {
	    return view('front-end.contact');
	});
//BackEnd
	Auth::routes();
	Route::get('admin', function () {
	    return view('back-end.index');
	});
	Route::get('/admin', 'HomeController@index')->name('home');
	Route::resource('tipekamar', 'TipekamarController');
	Route::resource('fasilitas', 'FasilitasController');
	Route::resource('booking', 'BookingController');
	Route::get('booking/create/{id_kamar}', 'BookingController@create');
	Route::resource('kamar', 'KamarController');
	Route::get('/changePassword','HomeController@showChangePasswordForm');
	Route::resource('user', 'UserController');

});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Route::get('/data-table', function () {
	//     return view('back-end/data-table');
	// });
// Route::get('rooms', function () {
	//     return view('front-end.rooms');
	// });
//Route::resource('booking', 'BookingController');
//Route::resource('rooms/detail/', 'FrontEndController@show');
// Route::get('/', function () {
	//     return view('front-end.index');
	// });
// Route::group(['middleware' => ['web']], function(){
// 	Route::get('/', 'PagesController@homepage');//method homepage di controller pagecontroller
// 	Route::get('about', function(){
// 		$halaman = 'about';
// 		return view('pages.about', compact('halaman'));
// 	});

// 	Auth::routes();
// 	Route::get('/home', 'HomeController@index')->name('home');

// 	//authentication routes...
// 	// $this->get('login', 'Auth/AuthController@showLoginForm');
// 	// $this->post('login', 'Auth/AuthController@login');
// 	// $this->get('logout', 'Auth/AuthController@logout');

// 	Route::get('siswa/cari', 'SiswaController@cari');
// 	Route::resource('siswa', 'SiswaController');
// 	Route::resource('kelas', 'KelasController');
// 	Route::resource('hobi', 'HobiController');
// 	Route::resource('user', 'UserController');
// });


//Route::get('date-mutator', 'SiswaController@dateMutator');
// Route::get('siswa', function(){
// 	$halaman = 'siswa';
// 	$siswa = ['Ana', 'Ani', 'Anu', 'Ane'];
// 	return view('siswa.index', compact('halaman', 'siswa'));
// 	//return view('siswa.index', compact('siswa'));//fungsi compact() untuk melewatkan data ke view
// });


