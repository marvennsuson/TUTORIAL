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
    return view('welcome');
});

Route::get('/index/article' , "ArticleController@index")->name('article.list');

Route::post('/index/create' , "ArticleController@store")->name('article.store');


// Route::post('/', function () {
//     return view('welcome');
// });

// Route::put('/', function () {
//     return view('welcome');
// });

// Route::path('/', function () {
//     return view('welcome');
// });
// Route::delete('/', function () {
//     return view('welcome');
// });
// Route::option('/', function () {
//     return view('welcome');
// });
