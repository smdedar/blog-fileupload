<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/','userController@index');

Route::get('/adduser','userController@adduser');

Route::post('/adduser','userController@store');

Route::get('/fileupload','pictureController@fileupload');
Route::post('/fileupload','pictureController@filestore');

Route::get('/viewimage','pictureController@viewimage');

Route::get('/pagination','paginationController@index');



