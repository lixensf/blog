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

//Route::group([
 //   'prefix' => '/admin',
 //   'namespace' => 'App\Http\Controllers\Admin'
//], function () {
//});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index'); {
        Route::resource('/category', 'CategoryController');
    }
});

//Route::prefix('admin')->group(function () {
  //  Route::get('/', 'Admin\DashboardController@dashboard')->name('admin.index'); {
    //    Route::resource('/category', 'Admin\CategoryController');
   // };
//});

//Route::prefix('admin')->group(function () {
  //  Route::post('/', 'Admin\CategoryController@create')->name('admin.category.create'); {
   //     Route::resource('/category/create', 'Admin\CategoryController');






    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home'); {
};
