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

/*Route::get('/pages','PagesController@show')->name('pages');*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

Route::get('/blog', function () {
    return view('pages/show');
})->name('blog');


/*
use App\Http\Controllers\PostController;
Route::resource('posts', PostController::class);*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
