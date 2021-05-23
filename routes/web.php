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
Route::get('/FAQ', 'FrontController@FAQ');
Route::get('/box/{stream_id}', 'FrontController@Box');
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
    Route::get('profile_WLR/edit/{id}', 'ProfilesController@edit_WLR');
    Route::post('profile_data/update/{id}', 'ProfilesController@update_data');
    Route::post('profile_WLR/update/{id}', 'ProfilesController@update_WLR');

    // 短片管理
    Route::get('profile/{wrestler_id}/clips','ClipsController@index');
    Route::get('profile/{wrestler_id}/clips/create', 'ClipsController@create');
    Route::get('profile/{wrestler_id}/clips/edit/{id}', 'ClipsController@edit');
    Route::post('profile/clips/store', 'ClipsController@store');
    Route::post('profile/clips/update/{id}', 'ClipsController@update');
    Route::post('profile/clips/delete/{id}', 'ClipsController@delete');
});
