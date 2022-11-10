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

// create a form page and submit it to the database
Route::get('/create', [BasicController::class, 'create'])->name('create');
Route::post('/create', [BasicController::class, 'store'])->name('store');

// Manipulate database data values
Route::get('/edit/{id}', [BasicController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [BasicController::class, 'update'])->name('update');

Route::get('/hello', function () {
    return "Hello World!";
});

Route::get('/user/{id}', function ($id) {
    return "Your ID is ".$id;
});