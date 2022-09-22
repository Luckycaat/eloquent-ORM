<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['logadouro', 'numero', 'bairro', 'cidade', 'cep', 'complemento', 'estado'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
