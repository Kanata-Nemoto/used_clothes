<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FavoriteController;


Route::get('/', 'ShopController@index');
Route::get('/shops/{shop}', 'ShopController@detail')->name('shop.detail');
Route::get('/mypage', 'ShopController@mypage');
Route::delete('/favorite/mypage', 'FavoriteController@destroyMypage');
Route::post('/favorite', 'FavoriteController@store');
Route::delete('/favorite', 'FavoriteController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
