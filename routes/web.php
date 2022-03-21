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
    return view('index');
});



Route::get('/office_register', function () {
    return view('office_register');
})->name('office_register');

Route::get('/index', 'IndexController@indexcreate')->name('index.create');


// Route::get('/thread_all',function(){
//     return view ('thread_all');
//  })->name('thread_all');

Route::get('/thread_all', 'ThreadController@getThread')->name('thread_all');

// Route::get('disp/{id}', 'ThreadController@show');

// スレッド詳細のルーティング
Route::get('/disp/{id}', 'ThreadController@show')->name('threads.disp');

// スレッド編集のルーティング
// Route::get('disp/{id}', 'ThreadController@ThreadEdit')->name('threads.edit');
// Route::post('disp/{id}', 'ThreadController@ThreadUpdate')->name('threads.update');

// マイページ詳細のルーティング
Route::get('/office/{id}', 'MypageOfficeController@mypageOffice')->name('mypage.office');

// マイページ編集のルーティング
 Route::get('/edit/{id}', 'MypageOfficeController@OfficeEdit')->name('mypage_office.edit');
 Route::post('/edit/{id}', 'MypageOfficeController@update')->name('update');

// Route::get('/edit/{id}', 'MypageOfficeController@edit')->name('office_edit');
// Route::post('/edit/{id}', 'MypageOfficeController@update')->name('office_update');


// グループがよくわからない
Route::group(['prefix' => 'user'], function () {

    // 自作の事業者登録
    Route::get('/signup', [
        'uses' => 'UserController@getSignup',
        'as' => 'user.signup'
    ]);

    // 自作の事業者登録のポスト送信？
    Route::post('/signup', [
        'uses' => 'UserController@postSignup',
        'as' => 'user.signup'
    ]);
});

// ユーザー退会処理のルーティング
Route::post('/user', 'UsersController@withdrawal')->name('user.withdrawal');



// スレッド作成のルーティング
Route::get('/create', 'ThreadController@showCreateForm')->name('threads.create');
Route::post('/create', 'ThreadController@create');


// 各カテゴリーのルーティング
Route::get('/food', 'ThreadcategoryController@showFood')->name('category.food');

Route::get('/workshop', 'ThreadcategoryController@shoWorkshop')->name('category.workshop');

Route::get('/photo', 'ThreadcategoryController@showPhoto')->name('category.photo');

Route::get('/beauty', 'ThreadcategoryController@showBeauty')->name('category.beauty');

Route::get('/seminar', 'ThreadcategoryController@showSeminar')->name('category.seminar');

Route::get('/other', 'ThreadcategoryController@showOther')->name('category.other');



Auth::routes();
