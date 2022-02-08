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
//     return view('index');
// });

Route::get('/',function(){
    return view ('index');
});

Route::get('/thread_all',function(){
    return view ('thread_all');
})->name('thread_all');


// Route::get('/general_registration', 'TaskController@index')->name('tasks.index');



Auth::routes();
