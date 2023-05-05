<?php

use App\Models\agendamentos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::POST('/', function() {

    $agendamento = new agendamentos();
    $agendamento->nome = $_POST["nome"];
    $agendamento->telefone = $_POST["telefone"];
    $agendamento->origem = $_POST["origem"];
    $agendamento->observacao = $_POST["observacao"];
    $agendamento->data_contato = $_POST["data_contato"];
    $agendamento->save();
    });
    

    Route::get('/', function () {
    return view('index');
    });
    
    Route::get('/consulta', function () {
    return view('consulta');
    });

    public function list()

    {
        $data = array(
        'list' => DB::table('agendamentos')->get()
        );
        
        return view('consulta', $data);
    }