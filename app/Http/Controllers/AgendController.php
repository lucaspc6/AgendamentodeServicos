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

    public function criar(Request $request){
        Agendamentos::create([
            'nom' => $request->nom,
            'tel' => $request->tel,
            'orig' => $request->orig,
            'dt_ct' => $request->dt_ct,
            'obs' => $request->obs,
        ]);

        return redirect()
        ->back()
        ->with('mensagem', 'O agendamento foi realizado!!');
    }

    public function ler(){
        $ler = Agendamentos::get();

        return view('consulta', compact('ler'));
    }

    public function selecionar($id){
        $agendamento = Agendamentos::where('id', '=', $id)->first();
        if(!empty($agendamento)){
            return view('editar', compact('agendamento'));
        }
        else{
            return redirect('/agendamento/ler');
        }
    }

    public function atualizar(Request $request){
        Agendamentos::where('id', '=',  $request->id)->update([
            'nom' => $request->nom,
            'tel' => $request->tel,
            'orig' => $request->orig,
            'dt_ct' => $request->dt_ct,
            'obs' => $request->obs,
        ]);

        return redirect('/agendamento/ler')
        ->with('mensagem', 'O agendamento foi atualizado!!');
    }

    public function deletar($id){
        Agendamentos::where('id', '=', $id)->delete();

        return redirect()
        ->back()
        ->with('mensagem', 'O agendamento foi deletado!!');
    }
}
