<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/portfo', function () {
    return view('portfo');
})->name('portfo');

Auth::routes();

Route::prefix('admin')->namespace('Admin')->middleware('admin')->group(function (){
    Route::resource('/','AdminController');
    Route::resource('/user','UserController');
    Route::resource('/service','ServiceController');
    Route::resource('/client','ClientController');
    Route::resource('/cv','CvController');
    Route::resource('/design','DesignController');
    Route::resource('/posts','PostController');
    Route::resource('/portfolio','PortfolioController');
    Route::resource('/gallery','GalleryController');
    Route::resource('/category','CategoryController');
    Route::post('ckeditor_image_upload','ImageController@store')->name('image_upload');
});

Route::namespace('View')->group(function (){
    Route::get('/','IndexController@index')->name('index_view');
    Route::get('/portfo/{slug}','IndexController@portfolio')->name('portfolio_view');
    Route::get('/post/{slug}','IndexController@show')->name('show');
    Route::post('/post-comment','IndexController@postComment')->name('comment');

});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
