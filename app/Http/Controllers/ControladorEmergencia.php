<?php

namespace App\Http\Controllers;

use App\Models\Emergencia;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Mensagem;

class ControladorEmergencia extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function _construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $emergenciaAndamento = Emergencia::all()->where('status', 'andamento');
        $emergenciaNova = Emergencia::all()->where('status', 'nova');
        return view('listarEmergencias', compact('emergenciaAndamento','emergenciaNova'));
    }

    public function show(string $id)
    {
        $emergencia = Emergencia::find($id);
        $user = User::find($emergencia->idUsuario);
        $emergencia->nomeUser = $user->name;
        $emergencia->deficiencia = $user->deficiencia;
        return view('listarEmergenciaEscolhida', compact('emergencia'));
    }

}
