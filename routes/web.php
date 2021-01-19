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

Route::post('/paynow' , 'PaynowController@initialise')->name('initialise');
Route::get('/poll' , 'PaynowController@poll')->name('poll');


Auth::routes();


Route::resource('members', 'MembersController');
Route::get('member_dashboard' , 'ClientController@index');
Route::post('member_verify', 'ClientController@member')->name('email-verification');
Route::get('member_profile', 'ClientController@profile');
Route::get('admin_dashboard', 'ClientController@admin');
Route::get('member_verified_graduate', 'ClientController@graduate');
Route::get('member_verified', 'ClientController@student')->name('student-registration');
Route::get('member_verified_professional', 'ClientController@professional');
Route::get('membership', 'ClientController@membership');
Route::get('verification' , 'ClientController@verify')->name('custom-verify');


Route::get('/reports', 'MembersController@reportsIndex')->name('reports');
Route::post('/reports', 'MembersController@viewReport')->name('view reports');

Route::get('/add', function(){
    return view('admin.memberForm');
});

