<?php

use App\Http\Controllers\Site\Sitecontrol;
use App\Http\Controllers\Admin\{SuportController};
use Illuminate\Support\Facades\Route;


Route::get('/',[SuportController::class,'index'])->name('supports.index');
Route::get('/support/create',[SuportController::class, 'create'])->name('supports.create');
Route::post('/support/create', [SuportController::class, 'store'])->name('supports.store');
Route::get('/support/{id}', [SuportController::class, 'show'])->name('supports.show');
Route::get('supports/{id}/edit',[SuportController::class, 'editar'])->name('supports.editar');
Route::put('/supports/{id}', [SuportController::class, 'atualizar'])->name('supports.atualizar');
Route::delete('/supports/{id}',[SuportController::class, 'apagar'])->name('supports.apagar');

Route::get('/Home', function(){
    return view('Rizorte_ui.front_end.Home');
});