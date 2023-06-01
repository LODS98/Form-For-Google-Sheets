<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

// Rotas públicas

Route::post('/salvar-dados', [ExcelController::class,'submitForm']);

Route::get('/formulario', [ExcelController::class, 'exibirFormulario']);
