<?php

namespace App\Http\Controllers;

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
        $emergengiaAndamento = Emergencia::all()->where('status', 'andamento');
        $emergenciaNova = Emergencia::all()->where('status', 'nova');

    }

    public function show(string $id)
    {
        $emergencia = Emergencia::find($id);
        return view('listar');
    }

}
