<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pessoa;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    use ApiResponse;
    public function register(Request $request)
    {
        try {
            $validatedData = Validator::make($request->all(), [
                'name' => 'required|string|max:255|unique:users',
                'email' => 'required|string|max:255|unique:users',
                'password' => 'required|string|min:8'
            ]);
            if ($validatedData->fails()) {
                return $this->error("Falha ao registrar!!!", 403, $validatedData->errors());
            }
            $user = Pessoa::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'RG_PCD' => $request->get('RG_PCD'),
                'telefone' => $request->get('telefone'),
                'dtNascimento' => $request->get('dtNascimento'),
                'deficiencia' => $request->get('deficiencia'),
                'tipo' => $request->get('tipo'),
                'password' => Hash::make($request->get('password')),
            ]);
            $token = $user->createToken('auth_token')->plainTextToken;
            return $this->success([
                'access_token' => $token,
                'user' => $user,
            ], "Cadastro realizado com sucesso!!!");
        } catch (\Throwable $th) {
            return $this->error("Falha ao registrar!!!", 401, $th->getMessage());
        }
    }

    public function login(Request $request)
    {
        try {
            if (!Auth::attempt($request->only('email', 'password'))) {
                return $this->error('Dados de autenticação inválidos!!!', 401);
            }
            $user = Pessoa::where('email', $request->get('email'))->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;
            return $this->success([
                'access_token' => $token,
                'user' => $user
            ], "Login realizado!!!");
        } catch (\Throwable $th) {
            return $this->error("Falha ao realizar o login!!!", 401, $th->getMessage());
        }
    }
    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return $this->success(null, "Até a próxima!!!");
        } catch (\Throwable $th) {
            return $this->error("Falha ao realizar o logout!!!", 401, $th->getMessage());
        }
    }
    
    public function gerarSenhaADM (Request $request) {
        $senha = Hash::make($request->get('senha'));
        return $senha;
    }
}