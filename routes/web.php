<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KabupController;
use App\Http\Controllers\PopulasiContoller;
use App\Http\Controllers\JumdesController;
use App\Http\Controllers\JumpenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kota', [KotaController::class, 'showKota']);
Route::get('/kabupaten', [KabupController::class, 'showKabupaten']);
Route::get('/populasi', [PopulasiContoller::class, 'showPopulasi']);
Route::get('/desa', [JumdesController::class, 'showJumdes']);
Route::get('/pensiunan', [JumpenController::class, 'showJumpen']);
