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

// Route::get('/', function () {
//     return view('home');
// });

// Route::View('/', 'home')->name('home');

Route::get('/', 'HomeController@home')->name('home');

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::View('/contact', 'contact')->name('contact');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Route::get('/blog-post/{id}/{welcome?}', function ($id, $welcome = 1) {
//     $pages = [
//         1 => [
//             'title' => 'from page 01'
//         ],
//         2 => [
//             'title' => 'from page 02'
//         ],
//     ];
//     $welcomes = [
//         1 => '<b>Hello: </b>',
//         2 => 'Welcome to: ',
//     ];
//     return view('blog-post', ['data' => $pages[$id], 'welcome' => $welcomes[$welcome]]);
// })->name('blog-post');

// Route::get('/blog-post/{id}/{welcome?}', [HomeController::class, 'blogPost'])->name('blog-post');

Route::resource('posts', 'PostController');