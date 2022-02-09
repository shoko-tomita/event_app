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


Route::get('/',function(){
    return view ('index');
});

Route::get('/thread_all',function(){
    return view ('thread_all');
 })->name('thread_all');


Route::get('/office_register',function(){
    return view ('office_register');
})->name('office_register');


Route::group(['prefix' => 'user'], function() {

    Route::get('/signup',[
      'uses' => 'UserController@getSignup',
      'as' => 'user.signup'
    ]);

  });

  Route::post('/signup',[
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
    ]);

    Route::get('/profile',[
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile'
    ]);

// Route::get('/general_registration', 'TaskController@index')->name('tasks.index');



Auth::routes();
