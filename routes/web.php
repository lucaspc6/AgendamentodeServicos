<?php
use App\Models\servico;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $meuprimeiroservico = new servico;
    $meuprimeiroservico->nome = "lucas";
    $meuprimeiroservico->telefone = "1234567";
    $meuprimeiroservico->save();
    return view('index');
});