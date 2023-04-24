<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// fallback for Error 404
Route::fallback(function(){
    return view('error.page404');
});

//landing page
Route::get('/', function(){
    return view('pages.index');
});

Route::prefix('admin')->middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('admin.login');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    //settings
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::post('update-settings/{id}', [AdminController::class, 'updatesettings'])->name('admin.update.settings');

    Route::get('socialmedia', [AdminController::class, 'socialmedia'])->name('admin.socialmedia');

    //clients
    Route::get('clients', [AdminController::class, 'clients'])->name('admin.clients');
    Route::post('add-clients', [AdminController::class, 'addclient'])->name('admin.clients.add');
    Route::get('get-clients/{id}', [AdminController::class, 'getclients'])->name('admin.get.clients');
    Route::get('delete-clients/{id}', [AdminController::class, 'deleteclients'])->name('admin.delete.clients');
    Route::post('update-client/{id}', [AdminController::class, 'updateclient'])->name('admin.clients.update');

    //Hero
    Route::get('hero', [AdminController::class, 'hero'])->name('admin.hero');
    Route::post('update-hero/{id}', [AdminController::class, 'updatehero'])->name('admin.update.hero');

    //about
    Route::get('about', [AdminController::class, 'about'])->name('admin.about');
    Route::post('update-about/{id}', [AdminController::class, 'updateabout'])->name('admin.update.about');

    //Features
    Route::get('feature', [AdminController::class, 'feature'])->name('admin.feature');
    Route::post('add-feature', [AdminController::class, 'addfeature'])->name('admin.feature.add');
    Route::get('get-feature/{id}', [AdminController::class, 'getfeature'])->name('admin.get.feature');
    Route::get('delete-feature/{id}', [AdminController::class, 'deletefeature'])->name('admin.delete.feature');
    Route::post('update-feature/{id}', [AdminController::class, 'updatefeature'])->name('admin.feature.update');

    //revenue
    Route::get('revenue', [AdminController::class, 'revenue'])->name('admin.revenue');
    Route::post('update-revenue/{id}', [AdminController::class, 'updaterevenue'])->name('admin.update.revenue');

    //revenue
    Route::get('collection', [AdminController::class, 'collection'])->name('admin.collection');
    Route::post('update-collections/{id}', [AdminController::class, 'updatecollections'])->name('admin.update.collection');

    Route::get('contact', [AdminController::class, 'contact'])->name('admin.contact');
});
