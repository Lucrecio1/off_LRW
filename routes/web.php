<?php

use App\Http\Controllers\Site\Sitecontrol;
use App\Http\Controllers\Admin\{SuportController};
use Illuminate\Support\Facades\Route;


Route::get('/',[SuportController::class,'index'])->name('supports.index');
Route::get('/support/create',[SuportController::class, 'create'])->name('supports.create');
Route::post('/support/create', [SuportController::class, 'store'])->name('supports.store');