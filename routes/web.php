<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

// 網站前台
// Route::get('/', function () {
//     return view('/welcome');
// })->name('index');
// Route::get('/', 'FrontController@redirectToCh');
// Route::get('/ch', 'FrontController@index');
// Route::get('/en', 'FrontController@index_en');
// test get lang


Route::get('/', 'FrontController@index');
Route::get('/lightsoff', 'FrontController@lightsoff');
Route::get('/FAQ', 'FrontController@FAQ');
Route::get('/Poll', 'FrontController@Poll');
Route::get('/Box/{stream_id}', 'FrontController@Box');
Route::get('/FightZNews', 'FrontController@FightZNews');
Route::get('/FightZNews/{new_id}', 'FrontController@News');
Route::get('/PreviousShows', 'FrontController@PreviousShows');
Route::get('/WrestlersProfile', 'FrontController@WrestlersProfile');
Route::get('/WrestlersProfile/{character}', 'FrontController@Profile');



Route::post('/ContactHFZ', 'FrontController@contact_us');

Route::get('/news/{lang}/{id}', 'FrontController@news');
Route::get('/Types/{lang}/{id}', 'FrontController@Types');

// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// Route::get('password/reset', 'Auth\ResetPasswordController@showResetForm');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');


// 網站後台
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/','HomeController@index');

    Route::get('seo', 'SeoController@index');
    Route::post('seo', 'SeoController@update');

    // Banner
    Route::get('banner','BannerController@index');
    Route::get('banner/edit/{id}', 'BannerController@edit');
    Route::post('banner/update/{id}', 'BannerController@update');

    // 最新消息
    Route::get('/news','NewsController@index');
    Route::get('news/create','NewsController@create');
    Route::get('news/edit/{id}', 'NewsController@edit');
    Route::post('news/store','NewsController@store');
    Route::post('news/update/{id}', 'NewsController@update');
    Route::post('news/delete/{id}', 'NewsController@delete');

    //聯絡我們管理
    Route::get('contact','ContactController@index');
    Route::post('contact/{id}','ContactController@show');
    Route::post('contact/delete/{id}','ContactController@delete');

    //檔案資料管理
    Route::get('profile','ProfilesController@index');
    Route::get('profile_data/edit/{id}', 'ProfilesController@edit_data');
    Route::post('profile_data/update/{id}', 'ProfilesController@update_data');

    // 短片管理
    Route::get('profile/{wrestler_id}/clips','ClipsController@index');
    Route::get('profile/{wrestler_id}/clips/create', 'ClipsController@create');
    Route::get('profile/{wrestler_id}/clips/edit/{id}', 'ClipsController@edit');
    Route::post('profile/clips/store', 'ClipsController@store');
    Route::post('profile/clips/update/{id}', 'ClipsController@update');
    Route::post('profile/clips/delete/{id}', 'ClipsController@delete');

    // 直播記錄管理
    Route::get('stream','StreamRecordsController@index');
    Route::get('stream/create', 'StreamRecordsController@create');
    Route::get('stream/edit/{id}', 'StreamRecordsController@edit');
    Route::post('stream/store', 'StreamRecordsController@store');
    Route::post('stream/update/{id}', 'StreamRecordsController@update');
    Route::post('stream/delete/{id}', 'StreamRecordsController@delete');

    // 比賽紀錄管理
    Route::get('stream/match_result/{stream_id}','MatchResultController@index');
    Route::get('stream/match_result/{stream_id}/create', 'MatchResultController@create');
    Route::get('stream/match_result/{stream_id}/edit/{id}', 'MatchResultController@edit');
    Route::post('stream/match_result/{stream_id}/store', 'MatchResultController@store');
    Route::post('stream/match_result/update/{id}', 'MatchResultController@update');
    Route::post('stream/match_result/delete/{id}', 'MatchResultController@delete');

    // 歌單管理
    Route::get('stream/song_list/{stream_id}','SongListController@index');
    Route::get('stream/song_list/{stream_id}/create', 'SongListController@create');
    Route::get('stream/song_list/edit/{id}', 'SongListController@edit');
    Route::post('stream/song_list/store', 'SongListController@store');
    Route::post('stream/song_list/update/{id}', 'SongListController@update');
    Route::post('stream/song_list/delete/{id}', 'SongListController@delete');

});
