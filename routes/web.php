<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/* Route::get('/', 'PersonsController@index'); */

Route::get('/' , 'HomeController@index')->name('blog.index');
Route::get('/single' , 'HomeController@show')->name('blog.single');
Route::get('/about' , 'HomeController@about')->name('about');
/*not frther worked in below route*/
Route::get('/contact' ,'HomeController@contact')->name('contact');



