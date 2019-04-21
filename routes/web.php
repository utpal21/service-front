<?php
Route::view('/', 'index');
    Auth::routes();

    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/writer', 'Auth\LoginController@writerLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/writer', 'Auth\RegisterController@createWriter');
     // Route::view('/admin', 'admin.dashboard')->middleware('auth:admin');
    // Route::view('/writer', 'writer.dashboard')->middleware('auth:writer');


    // customer section
    Route::view('/home', 'home')->middleware('auth');
    Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('auth');
    Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update')->middleware('auth');
   



    // admin section
    Route::group(
       [
       'prefix' => 'admin',
       'namespace' => 'Admin',
       'middleware' => 'auth:admin'
       ], 
       function(){
       Route::get('', 'DashboardController@index');
       Route::get('data', 'DataController@index');
       });

    //    wrier section
   Route::group(
       [
       'prefix' => 'writer',
       'namespace' => 'Writer',
       'middleware' => 'auth:writer'
       ],
       function(){
       Route::get('', 'DashboardController@index');
       });