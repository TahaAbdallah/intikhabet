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

Auth::routes();

// #### HOME 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// #### LOGIN PAGE
Route::get('/login-page', [App\Http\Controllers\HomeController::class, 'loginPage'])->name('loginPage');
Route::get('/profile-page', [App\Http\Controllers\HomeController::class, 'profilePage'])->name('profilePage');

// #### ADDING PAGES
Route::get('/add-data-entry-page', [App\Http\Controllers\HomeController::class, 'addDataEntryPage'])->name('addDataEntryPage');
Route::get('/add-murakeb-page', [App\Http\Controllers\HomeController::class, 'addMurakebPage'])->name('addMurakebPage');


Route::get('/edit-profile-page', function () {
    return view('editProfilePage');
})->name('editProfilePage');
