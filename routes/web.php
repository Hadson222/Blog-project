<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index'] 
)->name('baiviet.index');
Route::post('/login',[ArticleController::class, 'login']
);
Route::post('/registration',[ArticleController::class, 'registration']
);
Route::get('/baiviet/create',[ArticleController::class, 'create'])->name('baiviet.create');

Route::post('/baiviet',[ArticleController::class, 'store'])->name('baiviet.store');

Route::get('baiviet/edit/{$id}',[ArticleController::class, 'showFormEdit'])->name('baiviet.edit');

Route::post('/baiviet/edit/{$id}',[ArticleController::class, 'update'])->name('baiviet.update');

Route::delete('/delete',[ArticleController::class, 'destroy']
)->name('baiviet.destroy');


