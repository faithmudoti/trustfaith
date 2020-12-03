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
Route::get('/', function(){
    return view('welcome');
});

Route::get('/..', 'MembersController@index');


Auth::routes();


Route::resource('members', 'MembersController');
Route::get('member_dashboard' , 'ClientController@index');
Route::post('member_verified_student', 'ClientController@member');
Route::get('member_profile', 'ClientController@profile');



Route::get('/reports', 'MembersController@reportsIndex')->name('reports');
Route::post('/reports', 'MembersController@viewReport')->name('view reports');

Route::get('/add', function(){
    return view('admin.memberForm');
});
