<?php

use App\Models\Agendamentos;
use App\Http\Controllers\AgendController;
use Illuminate\Http\Request;


Route::get('/', [AgendController::class, 'index'])->name('index');

Route::post('/agendamento/create', [AgendController::class, 'create'])->name('criar_agendamentos');

Route::get('/agendamento/read', [AgendController::class, 'read'])->name('ler_agendamentos');
?>








