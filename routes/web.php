<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WeclomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WeclomeController::class,'welcome'])->name('welcome');

// Route::get('/note', [NoteController::class,'index'])->name('note.index');
// Route::get('/note/create',[NoteController::class,'create'])->name('note.create');
// Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
// Route::get('/note/{id}/edit', [NoteController::class,'edit'])->name('note.edit');
//backend logic below here
// Route::post('/note',[NoteController::class,'store'])->name('note.store');
// Route::put('/note/{id}',[NoteController::class,'update'])->name('note.update');
// Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

//shorthand way to route in resouce controller

Route::resource('note',NoteController::class);