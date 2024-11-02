<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;

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
    return view ('home', [
        'title' => 'Home'
        ]);
});

Route::get('/about', [AboutController::class, 'index']);

Route::get('/blog',[BlogController::class, 'index']);

Route::get('blog/{slug}',[BlogController::class, 'show']);

Route::get('/welcome', function () {
    return view ('welcome');
});

Route::get('/login', function(){
    return view ('login');
});