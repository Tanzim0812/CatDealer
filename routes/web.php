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
Route::get('/userdashboard', 'sitecontroller@index')->name('userdashboard');
Route::get('/userprofile', 'sitecontroller@userpro')->name('userprofile');
Route::get('/usermessage', 'sitecontroller@usermsg')->name('usermessage');
Route::get('/message', 'chatcontroller@index')->name('message');
Route::post('/chatStart', 'chatcontroller@chatstart')->name('chat-start');
Route::post('/customechatStart', 'chatcontroller@customchatstart')->name('custom-chat-start');
Route::post('/messageSend', 'chatcontroller@store')->name('message-send');
Route::get('/userchatshow/{id}', 'chatcontroller@userchatshow')->name('chat.show.user');
Route::get('/showuser/{id}', 'chatcontroller@showuser')->name('show.user');
Route::get('/customeruserchat/{id}', 'chatcontroller@cusshowuser')->name('cusshow.user');
Route::get('/deletechatuser/{id}', 'chatcontroller@destroy')->name('chat.user.del');


/* search */
Route::get('searchpro', 'sitecontroller@search')->name('search');
Route::get('autocomplete', 'searchcontroller@getAutocompleteData')->name('autocomplete');

Route::get('/products/getproducts','searchcontroller@getproduct')->name('products.getproducts');
Route::get('/seen-status/{id}/{seen_status}','sitecontroller@seen_status')->name('seen-status');

Route::post('/userdashboard-update', 'sitecontroller@update')->name('user.update');
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

/* Product */
Route::get('/AllProduct', 'productcontroller@index')->name('show-product');
Route::post('/saveProduct', 'productcontroller@store')->name('save-product');
Route::get('/deleteproduct/{id}', 'productcontroller@destroy')->name('del-product');
Route::get('/product-show/{id}','productcontroller@show')->name('product-show');
Route::post('/updateproduct', 'productcontroller@update')->name('update-product');
Route::get('list/getsubcat/{id}','productcontroller@getsubcat')->name('getsubcat');
Route::get('/product-status/{id}/{product_status}','productcontroller@status')->name('product-status');

/* message */
Route::get('/messageadmin', 'chatcontroller@indexadmin')->name('message-admin');
Route::get('/show/{id}', 'chatcontroller@show')->name('show');
Route::get('/customshow/{id}', 'chatcontroller@customshow')->name('show.customize');
Route::get('/userprofile-show/{id}','chatcontroller@userprofileshow')->name('userprofile-show');
Route::post('/messageSendadmin', 'chatcontroller@storeadmin')->name('message-sendadmin');
Route::get('/reply/{id}', 'chatcontroller@reply')->name('reply');
Route::get('/customreply/{id}', 'chatcontroller@customreply')->name('reply.customize');

/* user */
Route::get('/manageuser','HomeController@manageuser')->name('manage.user');
Route::get('/deleteuser/{id}', 'HomeController@destroy')->name('del-user');
Route::get('/role-status/{id}/{role_status}','HomeController@role_status')->name('role-status');


});
