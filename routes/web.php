<?php

use App\Http\Controllers\HomeController;
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
//Customer-side
Route::get('/', 'HomeController@index');



//Admin-side
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin-side', 'adminController@index');
Route::get('/dashboard', 'adminController@show_dash');
Route::post('/admin-dashboard','adminController@dashboard' );

//admin-content
Route::get('/all-category','categoryController@all_cat');


