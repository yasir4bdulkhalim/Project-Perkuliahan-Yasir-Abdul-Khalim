<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaperController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('papers', [PaperController::class, 'index'])->name('papers.index');
Route::post('papers/upload', [PaperController::class, 'upload'])->name('papers.upload');
Route::get('papers/download/{id}', [PaperController::class, 'download'])->name('papers.download');
Route::get('papers/edit/{id}', [PaperController::class, 'edit'])->name('papers.edit');
Route::post('papers/update/{id}', [PaperController::class, 'update'])->name('papers.update');
Route::delete('papers/destroy/{id}', [PaperController::class, 'destroy'])->name('papers.destroy');