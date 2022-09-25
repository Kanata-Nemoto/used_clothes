<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FavoriteController;


Route::get('/', 'ShopController@index');
Route::post('/search', 'ShopController@search');
Route::get('/shops/{shop}', 'ShopController@detail')->name('shop.detail');

Route::group(['middleware' => ['auth']], function(){
   Route::get('/mypage', 'ShopController@mypage')->name('shop.mypage');
    Route::post('/favorite', 'FavoriteController@store');
    Route::delete('/favorite', 'FavoriteController@destroy');
    Route::delete('/favorite/mypage', 'FavoriteController@destroyMypage');
});

Auth::routes();
