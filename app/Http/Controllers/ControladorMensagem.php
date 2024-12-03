<?php

namespace App\Http\Controllers;

use App\Models\Emergencia;
use App\Models\Mensagem;
use App\Models\User;
use Carbon\Carbon;
use Date;
use Illuminate\Http\Request;

class ControladorMensagem extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(string $idEmergencia)
    {
        $mensagens = Mensagem::where("idEmergencia", $idEmergencia)->orderBy('dtEnvio')->get();
        $emergencia = Emergencia::find($idEmergencia);
        $nome = User::find($emergencia->idUsuario);
        $nome = $nome->name;
        return view("/chat", compact("mensagens", "idEmergencia", "nome"));
    }

    public function store(Request $request, string $idEmergencia)
    {
        $emergencia = Emergencia::find($idEmergencia);
        $mensagem = new Mensagem();

        $mensagem->conteudo = $request->input("conteudo");
        $mensagem->caminhoFoto = $request->input("caminhoFoto");
        $mensagem->remetente = 1;
        $mensagem->destinatario = $emergencia->idUsuario;
        $mensagem->idEmergencia = $idEmergencia;
        $mensagem->dtEnvio = new Carbon();
        $mensagem->idEmergencia = $idEmergencia;
        
        $mensagem->save();
        return redirect()->route('listarMensagens', ['idEmergencia' => $idEmergencia]);
    }
}
