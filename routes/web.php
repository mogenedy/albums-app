<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PictureController;




Route::get('/', function () {
    return view('welcome');
});

Route::prefix('albums')->group(function () {
    Route::get('/create', [AlbumController::class, 'create'])->name('albums.create');
    Route::post('/store', [AlbumController::class, 'store'])->name('albums.store');
    Route::get('/',[AlbumController::class, 'index'])->name('albums.index');
    Route::get('/{album}', [AlbumController::class, 'show'])->name('albums.show');
    Route::get('/{album}/edit', [AlbumController::class, 'edit'])->name('albums.edit');
    Route::put('/{album}', [AlbumController::class, 'update'])->name('albums.update');
    Route::delete('/{album}', [AlbumController::class, 'destroy'])->name('albums.destroy');
});



Route::prefix('albums/{album_id}/pictures')->group(function () {
    Route::get('/create', [PictureController::class, 'createPicture'])->name('pictures.create');
    Route::post('/store', [PictureController::class, 'storePicture'])->name('pictures.store');
});
