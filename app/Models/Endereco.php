<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    //Mapeando uma tabela e seus relacionamentos fora das convenções

    protected $table = 'cadend';
    protected $primaryKey = 'cod';

    const CREATED_AT = 'data_criacao';
    const UPDATED_AT = 'data_atualizacao';

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'codigo_fun', 'cod');
    }
}
