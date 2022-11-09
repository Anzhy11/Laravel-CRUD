<?php

use Illuminate\Support\Facades\Route;
// Add controller path
use App\Http\Controllers\BasicController;

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

// Render the index page using a controller and assigning a name to it
Route::get('/', [BasicController::class, 'index'])->name('home');

// create a form page
Route::get('/create', [BasicController::class, 'create'])->name('create');

Route::get('/hello', function () {
    return "Hello World!";
});

Route::get('/user/{id}', function ($id) {
    return "Your ID is ".$id;
});