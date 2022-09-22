<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * Define o que será permitido
     */
    protected $fillable = ['nome', 'cpf', 'data_contratacao', 'data_demissao'];

    /**
     * Define o que não será permitido
     */
    //protected $guarded = ['created_at', 'updated_at', 'id'];

    /**
     * Permite tudo
     */
    //protected $guarded = [];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
