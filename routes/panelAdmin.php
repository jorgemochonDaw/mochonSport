<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\CategoriasControllers\RopaController;
use App\Http\Controllers\CategoriasControllers\CalzadoController;
use App\Http\Controllers\CategoriasControllers\MaterialDeportivoController;

Route::get('panelAdmin', [PanelController::class, 'panelAdmin'])->name('panelAdmin');
Route::resource('calzados', CalzadoController::class)->only(['store','create','update', 'edit']);
Route::resource('ropas', RopaController::class)->only(['store','create','update', 'edit']);
Route::resource('materiales', MaterialDeportivoController::class,['parameters' => [
    'materiales' => 'material']])->only(['store','create','update', 'edit']);

