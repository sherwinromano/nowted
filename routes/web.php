<?php

use App\Http\Controllers\FavoritesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

Route::get('/', [NotesController::class, 'index'])->name('notes.index');
Route::get('/note/{id}', [NotesController::class, 'show'])->name('notes.show');
Route::get('/new-note', [NotesController::class, 'create'])->name('notes.create');
Route::post('/new-note', [NotesController::class, 'store'])->name('notes.store');
Route::delete('/note/{id}', [NotesController::class, 'destroy'])->name('notes.destroy');
Route::post('/note/favorite/{id}', [NotesController::class, 'addToFavorites'])->name('notes.addToFavorites');

Route::get('/favorites', [FavoritesController::class, 'index'])->name('favorites.index');
Route::get('/favorites/{id}', [FavoritesController::class, 'show'])->name('favorites.show');

Route::get('/trash', function() {
    return view('trash');
})->name('trash');


