<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CallLogsController;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Route::middleware('auth')->group(function(){
    
//     Route::get('/dashboard', [DashboardController::class, 'index']);

// });

//superadmin
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard.index');

Route::get('/login', function() {
    return view('login');
});

Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/ticket', [TicketController::class, 'index'])
    ->name('ticket.index');

Route::get('/calllogs', [CallLogsController::class, 'index'])
    ->name('calllogs.index');

Route::get('/reports', [ReportsController::class, 'index'])
    ->name('reports.index');


