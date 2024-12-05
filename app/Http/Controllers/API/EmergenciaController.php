<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Mensagem;
use App\Models\Emergencia;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class EmergenciaController extends Controller
{
    use ApiResponse;

    public function store(Request $request)
    {
        try {
            $emergencia = Emergencia::create([
                'tipoEmergencia' => $request->get('tipoEmergencia'),
                'subEmergencia' => $request->get('subEmergencia'),
                'cidade' => $request->get('cidade'),
                'bairro' => $request->get('bairro'),
                'rua' => $request->get('rua'),
                'numero' => $request->get('numero'),
                'idUsuario' => $request->get('idUsuario'),
                'status' => "nova"
            ]);
            return $this->success([
                'emergencia' => $emergencia,
            ], "emergencia cadastrada com sucesso!!!");
        }catch (\Throwable $th) {
            return $this->error("Falha ao cadastrar emergencia!!!", 401, $th->getMessage());
        }
    }
}