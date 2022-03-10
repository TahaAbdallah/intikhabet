<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LawaehShatebController;

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


// Route::group(['middleware' => 'guest'], function () {

//     // #### LOGIN PAGE
//     Route::get('/login-page', [App\Http\Controllers\HomeController::class, 'loginPage'])->name('loginPage');
// });

// Route::group(['middleware' => 'auth'], function () {

//     // #### HOME 
//     Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//     // #### AL LAWA2EH 
//     Route::get('/al-lawaeh', [App\Http\Controllers\HomeController::class, 'lawaeh'])->name('lawaeh');

//     //CATEGORIES PAGES
//     Route::get('/data-entry-page', [App\Http\Controllers\HomeController::class, 'dataEntryPage'])->name('dataEntryPage');
//     Route::get('/murakeb-page', [App\Http\Controllers\HomeController::class, 'murakebPage'])->name('murakebPage');
//     Route::get('/mandoub-mutajawwel-page', [App\Http\Controllers\HomeController::class, 'mandoubMutajawwelPage'])->name('mandoubMutajawwelPage');
//     Route::get('/mandoub-sebet-page', [App\Http\Controllers\HomeController::class, 'mandoubSebetPage'])->name('mandoubSebetPage');
//     Route::get('/munassek-page', [App\Http\Controllers\HomeController::class, 'munassekPage'])->name('munassekPage');
//     Route::get('/al-muntakhibin-page', [App\Http\Controllers\HomeController::class, 'alMuntakhibinPage'])->name('alMuntakhibinPage');
//     Route::get('/lam-yantakhibou-page', [App\Http\Controllers\HomeController::class, 'lamYantakhibouPage'])->name('lamYantakhibouPage');

//     // #### ADDING PAGES
//     Route::get('/add-data-entry-page', [App\Http\Controllers\HomeController::class, 'addDataEntryPage'])->name('addDataEntryPage');
//     Route::get('/add-murakeb-page', [App\Http\Controllers\HomeController::class, 'addMurakebPage'])->name('addMurakebPage');
//     Route::get('/add-mandoub-mutajawwel-page', [App\Http\Controllers\HomeController::class, 'addMandubMutajawwelPage'])->name('addMandubMutajawwelPage');
//     Route::get('/add-mandoub-sebet-page', [App\Http\Controllers\HomeController::class, 'addMandubSebetPage'])->name('addMandubSebetPage');
//     Route::get('/add-munassek-page', [App\Http\Controllers\HomeController::class, 'addMunassekPage'])->name('addMunassekPage');
//     Route::get('/add-muntakheb-page', [App\Http\Controllers\HomeController::class, 'addMuntakhebPage'])->name('addMuntakhebPage');
//     Route::get('/add-murashah-page', [App\Http\Controllers\HomeController::class, 'addMurashahPage'])->name('addMurashahPage');



//     // #### PROFILE PAGES
//     Route::get('/profile-page', [App\Http\Controllers\HomeController::class, 'profilePage'])->name('profilePage');
//     Route::get('/edit-profile-page', function () {
//         return view('editProfilePage');
//     })->name('editProfilePage');
// });



Route::get('file-import-export', [LawaehShatebController::class, 'fileImportExport']);
Route::post('file-import', [LawaehShatebController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [LawaehShatebController::class, 'fileExport'])->name('file-export');

Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'loginPage'])->name('loginPage');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        // #### LOGIN PAGE
        Route::get('/login-page', [App\Http\Controllers\Admin\AdminController::class, 'loginPage'])->name('loginPage');
        Route::post('/check', [App\Http\Controllers\Admin\AdminController::class, 'check'])->name('check');
        Route::get('/forget-password', [App\Http\Controllers\Admin\Auth\ForgetPassword::class, 'forget'])->name('forget');
        Route::post('/forget-password-proccess', [App\Http\Controllers\Admin\Auth\ForgetPassword::class, 'forgetProccess'])->name('forgetProccess');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {

        Route::post('/logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('logout');

        // #### HOME 
        Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');

        // #### AL LAWA2EH 
        Route::get('/al-lawaeh', [App\Http\Controllers\Admin\AdminController::class, 'lawaeh'])->name('lawaeh');

        //CATEGORIES PAGES
        Route::get('/data-entry-page', [App\Http\Controllers\Admin\AdminController::class, 'dataEntryPage'])->name('dataEntryPage');
        Route::get('/murakeb-page', [App\Http\Controllers\Admin\AdminController::class, 'murakebPage'])->name('murakebPage');
        Route::get('/mandoub-mutajawwel-page', [App\Http\Controllers\Admin\AdminController::class, 'mandoubMutajawwelPage'])->name('mandoubMutajawwelPage');
        Route::get('/mandoub-sebet-page', [App\Http\Controllers\Admin\AdminController::class, 'mandoubSebetPage'])->name('mandoubSebetPage');
        Route::get('/munassek-page', [App\Http\Controllers\Admin\AdminController::class, 'munassekPage'])->name('munassekPage');
        Route::get('/al-muntakhibin-page', [App\Http\Controllers\Admin\AdminController::class, 'alMuntakhibinPage'])->name('alMuntakhibinPage');
        Route::get('/lam-yantakhibou-page', [App\Http\Controllers\Admin\AdminController::class, 'lamYantakhibouPage'])->name('lamYantakhibouPage');

        // #### ADDING PAGES
        Route::get('/add-data-entry-page', [App\Http\Controllers\Admin\AdminController::class, 'addDataEntryPage'])->name('addDataEntryPage');
        Route::get('/add-murakeb-page', [App\Http\Controllers\Admin\AdminController::class, 'addMurakebPage'])->name('addMurakebPage');
        Route::get('/add-mandoub-mutajawwel-page', [App\Http\Controllers\Admin\AdminController::class, 'addMandubMutajawwelPage'])->name('addMandubMutajawwelPage');
        Route::get('/add-mandoub-sebet-page', [App\Http\Controllers\Admin\AdminController::class, 'addMandubSebetPage'])->name('addMandubSebetPage');
        Route::get('/add-munassek-page', [App\Http\Controllers\Admin\AdminController::class, 'addMunassekPage'])->name('addMunassekPage');
        Route::get('/add-muntakheb-page', [App\Http\Controllers\Admin\AdminController::class, 'addMuntakhebPage'])->name('addMuntakhebPage');
        Route::get('/add-murashah-page', [App\Http\Controllers\Admin\AdminController::class, 'addMurashahPage'])->name('addMurashahPage');



        // #### PROFILE PAGES
        Route::get('/profile-page', [App\Http\Controllers\Admin\AdminController::class, 'profilePage'])->name('profilePage');
        Route::get('/edit-profile-page', function () {
            return view('editProfilePage');
        })->name('editProfilePage');
    });
});
