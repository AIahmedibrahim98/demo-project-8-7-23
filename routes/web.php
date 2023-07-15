<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => view('welcome'));

Route::get('test', fn () => "test page");

Route::get('test2', [TestController::class, 'test2']);

Route::get('test3/{name}/{age?}', [TestController::class, 'test3']);

Route::get('calculator/add/{x}/{y}', [CalculatorController::class, 'add']);
Route::get('calculator/sub/{x}/{y}', [CalculatorController::class, 'sub']);
Route::get('calculator/multi/{x}/{y}', [CalculatorController::class, 'multi']);
Route::get('calculator/div/{x}/{y}', [CalculatorController::class, 'div']);
