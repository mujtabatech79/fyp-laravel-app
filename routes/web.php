<?php

use App\Http\Controllers\DevopsFinalProjectController;
use App\Http\Controllers\FypDashboardController;

Route::get('/', [DevopsFinalProjectController::class, 'index'])->name('home');
Route::get('/devops-final', [DevopsFinalProjectController::class, 'index'])->name('devops.final');