<?php

namespace App\Http\Controllers;
use App\Models\Agendamentos;
use Illuminate\Http\Request;

class AgendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function consulta(){
        return view('consulta');
    }

    public function create(Request $request){
        Agendamentos::create([
            'nom' => $request->nom,
            'tel' => $request->tel,
            'orig' => $request->orig,
            'dt_ct' => $request->dt_ct,
            'obs' => $request->obs,
        ]);

        return redirect()
        ->back()
        ->with('mensagem', 'Agendamento finalizado com sucesso!');
    }

    public function read(){
        $ler = Agendamentos::get();

        return view('consulta', compact('ler'));
    }
}
