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

Route::group(['middleware' => 'guest'], function () {

    // #### LOGIN PAGE
    Route::get('/login-page', [App\Http\Controllers\HomeController::class, 'loginPage'])->name('loginPage');
});

Route::group(['middleware' => 'auth'], function () {

    // #### HOME 
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

    //CATEGORIES PAGES
    Route::get('/data-entry-page', [App\Http\Controllers\HomeController::class, 'dataEntryPage'])->name('dataEntryPage');
    Route::get('/murakeb-page', [App\Http\Controllers\HomeController::class, 'murakebPage'])->name('murakebPage');
    Route::get('/mandoub-mutajawwel-page', [App\Http\Controllers\HomeController::class, 'mandoubMutajawwelPage'])->name('mandoubMutajawwelPage');
    Route::get('/mandoub-sebet-page', [App\Http\Controllers\HomeController::class, 'mandoubSebetPage'])->name('mandoubSebetPage');
    Route::get('/munassek-page', [App\Http\Controllers\HomeController::class, 'munassekPage'])->name('munassekPage');
    Route::get('/al-muntakhibin-page', [App\Http\Controllers\HomeController::class, 'alMuntakhibinPage'])->name('alMuntakhibinPage');
    Route::get('/lam-yantakhibou-page', [App\Http\Controllers\HomeController::class, 'lamYantakhibouPage'])->name('lamYantakhibouPage');

    // #### ADDING PAGES
    Route::get('/add-data-entry-page', [App\Http\Controllers\HomeController::class, 'addDataEntryPage'])->name('addDataEntryPage');
    Route::get('/add-murakeb-page', [App\Http\Controllers\HomeController::class, 'addMurakebPage'])->name('addMurakebPage');
    Route::get('/add-mandoub-mutajawwel-page', [App\Http\Controllers\HomeController::class, 'addMandubMutajawwelPage'])->name('addMandubMutajawwelPage');
    Route::get('/add-mandoub-sebet-page', [App\Http\Controllers\HomeController::class, 'addMandubSebetPage'])->name('addMandubSebetPage');
    Route::get('/add-munassek-page', [App\Http\Controllers\HomeController::class, 'addMunassekPage'])->name('addMunassekPage');
    Route::get('/add-muntakheb-page', [App\Http\Controllers\HomeController::class, 'addMuntakhebPage'])->name('addMuntakhebPage');
    Route::get('/add-murashah-page', [App\Http\Controllers\HomeController::class, 'addMurashahPage'])->name('addMurashahPage');



    // #### PROFILE PAGES
    Route::get('/profile-page', [App\Http\Controllers\HomeController::class, 'profilePage'])->name('profilePage');
    Route::get('/edit-profile-page', function () {
        return view('editProfilePage');
    })->name('editProfilePage');
});
