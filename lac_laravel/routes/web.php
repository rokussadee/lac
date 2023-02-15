<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
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
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/', function () {
    return redirect('programme');
});
Route::get('programme', [EventController::class, 'getIndex'])->name('programme');
Route::get('aboutus', [StaticController::class, 'getAbout'])->name('about us');
Route::get('inresidence', [ResidenceController::class, 'getRelevant'])->name('in residence');
Route::prefix('artwork')->name('artwork.')->group(function () {
    Route::get('gallery', [ArtworkController::class, 'getGallery'])->name('gallery');
    Route::get('gazettes', [ArtworkController::class, 'getGazettes'])->name('gazettes');
    Route::get('albums', [ArtworkController::class, 'getAlbums'])->name('albums');
});

Route::prefix('archive')->name('archive.')->group(function () {
    Route::get('events', [EventController::class, 'getEventArchive'])->name('events');
    Route::get('residencies', [ResidenceController::class, 'getResidencyArchive'])->name('residencies');
});

Route::prefix('subscribers')->name('subscribers.')->group(function () {
    Route::post('store', [MailController::class, 'storeNewSubscriber'])->name('store');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/upload-image-page', function () {
            return view('admin.imageupload');
        });
        Route::post('/upload-image', [ImageController::class, 'uploadImage'])->name('upload-image');

        Route::prefix('events')->name('events.')->group(function () {
            Route::get('/index', [AdminController::class, 'getEvents'])->name('index');
            Route::get('/create-event-page', function () {
                return view('admin.create-event');
            })->name('create-event');
            Route::post('/upload-event', [AdminController::class, 'postEvent'])->name('upload-event');

            Route::get('/{event:slug}/edit', [EventController::class, 'editEvent'])->name('edit-event');
        });

        Route::prefix('residencies')->name('residencies.')->group(function () {
            Route::get('/index', [AdminController::class, 'getResidencies'])->name('index');
            Route::get('/create-residency-page', function () {
                return view('admin.create-residency');
            })->name('create-residency');
            Route::post('/upload-residency', [AdminController::class, 'postResidency'])->name('upload-residency');

            Route::get('/{residency:slug}/edit', [ResidenceController::class, 'editResidency'])->name('edit-residency');

        });

        Route::get('/users', [AdminController::class, 'getUsers'])->name('users');
        Route::get('/residencies', [AdminController::class, 'getResidencies'])->name('residencies');
//        Route::get('/artwork', [AdminController::class, 'getArtwork'])->name('artwork');
    });
});
