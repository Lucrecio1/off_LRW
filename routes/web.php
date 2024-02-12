<?php

use App\Http\Controllers\Site\Sitecontrol;
use App\Http\Controllers\Admin\{SuportController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', [Sitecontrol::class, 'contacto']);
Route::get('/supports',[SuportController::class,'index'])->name('supports.index');