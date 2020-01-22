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

// Route::get('/{any}', 'FrontController@index')->where('any', '.*');

// Route::get('/', function () {
//     return view('layouts.users.register');
// });
// Route::resource('user','UserController');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/home', 'HomeController@index')->name('home');

// dari yang lama

    // Auth::routes();

    // Route::get('/home', 'AuthController@login')->name('login');
    // Route::get('/login', 'AuthController@login')->name('login');
    // Route::post('/postlogin', 'AuthController@postlogin');
    // Route::get('/logout', 'AuthController@logout');


// Route::group(['middleware' => ['auth','checkRole:sudo']],function(){
//     Route::resource('user','UserController');
    
//     Route::get('getdatauser',[
//         'uses' => 'UserController@getdatauser',
//         'as' => 'ajax.get.data.user',
//     ]);
// });

// Route::group(['middleware' => ['auth','checkRole:sudo,admin']],function(){
//     Route::resource('dashboard','DashboardController'); 
//     Route::resource('people','PeopleController');
//     Route::resource('pengurus','AdminController');

//     Route::get('getdatapeople',[
//         'uses' => 'PeopleController@getdatapeople',
//         'as' => 'ajax.get.data.people',
//     ]);

//     Route::get('peopleimport', [
//         'uses' => 'PeopleController@getimportdata',
//         'as' => 'get.people.import',
//     ]);
    
//     // Route::get('getdatapengurus',[
//     //     'uses' => 'AdminController@getdatapengurus',
//     //     'as' => 'ajax.get.data.pengurus',
//     // ]);

//     // Route::get('getdatakaryawan',[
//     //     'uses' => 'KaryawanController@getdatakaryawan',
//     //     'as' => 'ajax.get.data.karyawan',
//     // ]);

//     // Route::get('getdatapelanggan',[
//     //     'uses' => 'PelangganController@getdatapelanggan',
//     //     'as' => 'ajax.get.data.pelanggan',
//     // ]);

//     Route::get('/pengurus', 'ApipeopleController@getDataByPeople');
//     Route::get('/pengurus/cari', 'ApipeopleController@loadData');

// });

