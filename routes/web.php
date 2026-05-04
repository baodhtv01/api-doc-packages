<?php

use Illuminate\Support\Facades\Route;
use Hoaid\ApiDoc\Http\Controllers\ApiDocController;

Route::get('/', [ApiDocController::class, 'index'])->name('apidoc.index');
Route::get('/json', [ApiDocController::class, 'json'])->name('apidoc.json');
