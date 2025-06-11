<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

Route::get('/', [NotesController::class, 'index'])->name('notes.index');
Route::get('/note/{id}', [NotesController::class, 'show'])->name('notes.show');
Route::get('/new-note', [NotesController::class, 'create'])->name('notes.create');

