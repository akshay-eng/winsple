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

Route::get('/','PagesController@index');


Route::get('/about','PagesController@about'
);
Route::get('/courses','ContactController@courses'
);
Route::post('/sendmessage','ContactController@sendEmail')->name('contact.send');

Route::get('/admin','PagesController@admin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\PagesController::class, 'admin'])->name('admin');
Route::resource('categories','CategoriesController');