<?php

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

Route::get('/', function () {
    return view('website.home');
});
Route::middleware(['User','auth'])->group(function () {
Route::get('/userprofile', 'sitecontroller@index')->name('userprofile');
});
Auth::routes();

Route::middleware(['Admin','auth'])->group(function (){
Route::get('/admin', 'HomeController@index')->name('admin');
/* Category */
Route::get('/AllCategories', 'categoriesController@index')->name('show-cat');
Route::post('/saveCategories', 'categoriesController@store')->name('save-cat');
Route::get('/deleteCategories/{id}', 'categoriesController@destroy')->name('del-cat');
Route::get('/cat-show/{id}','categoriesController@show')->name('cat-show');
Route::post('/updateCategories', 'categoriesController@update')->name('update-cat');

/* Sub category */
Route::get('/AllsubCategories', 'subcategoriesController@index')->name('show-subcat');
Route::post('/savesubCategories', 'subcategoriesController@store')->name('save-subcat');
Route::get('/deletesubCategories/{id}', 'subcategoriesController@destroy')->name('del-subcat');
Route::get('/subcat-show/{id}','subcategoriesController@show')->name('subcat-show');
Route::post('/updatesubCategories', 'subcategoriesController@update')->name('update-subcat');

});
