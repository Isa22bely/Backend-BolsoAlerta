<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;
    protected $fillable = ['conteudo', 'caminhoFoto', 'dtEnvio', 'idEmergencia'];

    public function Emergencia()
    {
        return $this->hasOne(Emergencia::class, 'id');
    }
}
