<?php
namespace App\Http\Controllers;
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

// Определение маршрутов для получения информации о сервере, клиенте и бд
Route::get('/info/server', [InfoController::class, 'serverInfo']);
Route::get('/info/client', [InfoController::class, 'clientInfo']);
Route::get('/info/database', [InfoController::class, 'dbInfo']);
