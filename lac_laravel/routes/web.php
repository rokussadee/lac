<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ResidenceController;
use App\Http\Controllers\ArtworkController;
use \App\Http\Controllers\MailController;
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

Route::get('/', [EventController::class, 'getIndex'])->name('programme');
Route::get('aboutus', [StaticController::class, 'getAbout'])->name('about us');
Route::get('inresidence', [ResidenceController::class, 'getRelevant'])->name('in residence');
Route::prefix('artwork')->name('artwork.')->group(function () {
    Route::get('gallery', [ArtworkController::class, 'getGallery'])->name('gallery');
    Route::get('gazettes', [ArtworkController::class, 'getGazettes'])->name('gazettes');
    Route::get('objects', [ArtworkController::class, 'getObjects'])->name('objects');
    Route::get('albums', [ArtworkController::class, 'getAlbums'])->name('albums');
});
//Route::view('artwork', 'content.under-construction')->name('artwork');
Route::view('archive', 'content.under-construction')->name('archive');

Route::prefix('subscribers')->name('subscribers.')->group(function () {

    Route::post('store', [MailController::class, 'storeNewSubscriber'])->name('store');
});
