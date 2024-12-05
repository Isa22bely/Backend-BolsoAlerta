<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergencia extends Model
{
    use HasFactory;
    protected $fillable = ['tipoEmergencia', 'subEmergencia', 'cidade', 'bairro', 'rua', 'numero', 'idUsuario', 'status'];

    public function Pessoa()
    {
        return $this->hasOne(Pessoa::class, 'id');
    }

    public function Mensagem()
    {
        return $this->belongsTo(Mensagem::class);
    }
}
