<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;
    protected $fillable = ['conteudo', 'caminhoFoto', 'dtEnvio', 'idEmergencia', 'destinatario', 'remetente'];

    public function Emergencia()
    {
        return $this->hasOne(Emergencia::class, 'id');
    }

    public function User()
    {
        return $this->hasOne(User::class, 'id');
    }
}
