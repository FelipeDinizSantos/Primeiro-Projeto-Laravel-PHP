<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\GeneratePessoalData;
use App\Http\Controllers\ShowPessoalDataController;
use App\Http\Controllers\ProductsController;

Route::get('/home/{name}/{lastname?}', [UserController::class, 'show']);

Route::get('/calculadora', [CalculatorController::class, 'show']);

Route::get('/calculadora/{operation}/{num1}/{num2}', [OperationsController::class, 'show']);

Route::get('/gerarDadosPessoais', [GeneratePessoalData::class, 'show']);

Route::get('/apresentarDadosPessoais/{name}/{lastname}/{RM}/{gender}/{address}', [ShowPessoalDataController::class, 'show']);

Route::get('/produtos', [ProductsController::class, 'show']);