<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Mensagem;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class MensagemController extends Controller
{
    use ApiResponse;

    public function store(Request $request)
    {
        try {
            $mensagem = Mensagem::create([
                'conteudo' => $request->get('conteudo'),
                'caminhoFoto' => $request->get('caminhoFoto'),
                'idEmergencia' => $request->get('idEmergencia'),
                'destinatario' => $request->get('destinatario'),
                'remetente' => $request->get('remetente'),
                'dtEnvio' => new Carbon()
            ]);
            return $this->success([
                'mensagem' => $mensagem,
            ], "Cadastro realizado com sucesso!!!");
        }catch (\Throwable $th) {
            return $this->error("Falha ao registrar!!!", 401, $th->getMessage());
        }
    }

    public function show(Request $request)
    {
        $mensagens = Mensagem::where("idEmergencia", $request->get('idEmergencia'))->orderBy('dtEnvio')->get();
        return $this->success([
            'mensagens' => $mensagens,
        ], "OK");
    }
}