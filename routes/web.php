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

Route::get('/index','IndexController@indexcreate')->name('index.create');


// Route::get('/thread_all',function(){
//     return view ('thread_all');
//  })->name('thread_all');

Route::get('/thread_all', 'ThreadController@getThread');

Route::get('thread/{id}', 'ThreadController@show');


Route::get('/office_register',function(){
    return view ('office_register');
})->name('office_register');


// グループがよくわからない
Route::group(['prefix' => 'user'], function() {

    // 自作の事業者登録
    Route::get('/signup',[
      'uses' => 'UserController@getSignup',
      'as' => 'user.signup'
    ]);

    // 自作の事業者登録のポスト送信？
    Route::post('/signup',[
        'uses' => 'UserController@postSignup',
        'as' => 'user.signup'
        ]);

    });

        // ユーザー退会処理のルーティング
        Route::post('/user', 'UsersController@withdrawal')->name('user.withdrawal');

        // スレッド作成のルーティング
        Route::get('/create', 'ThreadController@showCreateForm')->name('threads.create');

        // スレッド詳細のルーティング
        Route::get('/disp', 'ThreadController@threadDisp')->name('threads.disp');


            // 各カテゴリーのルーティング
            Route::get('/food', 'ThreadcategoryController@showFood')->name('category.food');

            Route::get('/workshop', 'ThreadcategoryController@shoWorkshop')->name('category.workshop');

            Route::get('/photo', 'ThreadcategoryController@showPhoto')->name('category.photo');

            Route::get('/beauty', 'ThreadcategoryController@showBeauty')->name('category.beauty');

            Route::get('/seminar', 'ThreadcategoryController@showSeminar')->name('category.seminar');

            Route::get('/other', 'ThreadcategoryController@showOther')->name('category.other');



Auth::routes();
