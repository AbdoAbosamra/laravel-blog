<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts' , [PostController::class , 'index'])->name('posts.index');
Route::get('posts/{post}' , [PostController::class ,'show'])->name('posts.show');

// 1 - define a new route so the user can access it through  browser
// 2 - define controller that renders a view
// 3 - define view that contains list of posts
// 4 - remove any static html data from the view
// 5 - Handel Routeing and controller name convention


// important : to hint to any Route by Route name route('route name')
