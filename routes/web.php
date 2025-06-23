<?php

use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\FavoritesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\TrashController;

Route::get('/', [NotesController::class, 'index'])->name('notes.index');
Route::get('/note/{id}', [NotesController::class, 'show'])->name('notes.show');
Route::get('/new-note', [NotesController::class, 'create'])->name('notes.create');
Route::post('/new-note', [NotesController::class, 'store'])->name('notes.store');
Route::get('/edit-note/{id}', [NotesController::class, 'edit'])->name('notes.edit');
Route::post('/edit-note/{id}', [NotesController::class, 'update'])->name('notes.update');
Route::delete('/note/{id}', [NotesController::class, 'destroy'])->name('notes.destroy');

Route::get('/favorites', [FavoritesController::class, 'index'])->name('favorites.index');
Route::get('/favorites/{id}', [FavoritesController::class, 'show'])->name('favorites.show');
Route::post('/favorites/{id}', [FavoritesController::class, 'addToFavorites'])->name('favorites.addToFavorites');

Route::get('/archives', [ArchivesController::class, 'index'])->name('archives.index');
Route::get('/archives/{id}', [ArchivesController::class, 'show'])->name('archives.show');
Route::post('/archives/{id}', [ArchivesController::class, 'addToArchives'])->name('archives.addToArchives');

Route::get('/trash', [TrashController::class, 'index'])->name('trash.index');
Route::get('/trash/{id}', [TrashController::class, 'show'])->name('trash.show');
Route::post('/trash/add/{id?}{note_id?}', [TrashController::class, 'addToTrash'])->name('trash.addToTrash');
Route::post('/trash/{id}', [TrashController::class, 'recover'])->name('trash.recover');


