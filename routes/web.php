<?php

use App\Models\Agendamentos;
use App\Http\Controllers\AgendController;
use Illuminate\Http\Request;


Route::get('/', [AgendController::class, 'index'])->name('index');

Route::post('/agendamento/criar', [AgendController::class, 'criar'])->name('criar_agendamentos');

Route::get('/agendamento/ler', [AgendController::class, 'ler'])->name('ler_agendamentos');

Route::get('/agendamento/{id}', [AgendController::class, 'selecionar'])->name('selecionar_agendamentos');

Route::post('/agendamento/atualizar', [AgendController::class, 'atualizar'])->name('atualizar_agendamentos');

Route::get('/agendamento/deletar/{id}', [AgendController::class, 'deletar'])->name('deletar_agendamentos');
?>








