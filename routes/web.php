<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

Route::resource('/post', PostController::class);

Route::resource('/comment', CommentsController::class);

Route::get('/', [PostController::class, 'index']);

//Route::get('/', [PagesController::class, 'index']);

//Route::get('/home', [HomeController::class, 'index'])->name('domu');

//Route::get('/home/{name}', [HomeController::class, 'show']);

/* puvodni
Route::get('/', function () {
    return view('home');
});
*/

/* Route::get('odkaz', function () {
    return 'Hele, text odkazu! :-)';
} );
*/

// pole neorane
/*Route::get('pole', function () {
    return ['Pepa', 'Franta', 'Kamil'];
});
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
