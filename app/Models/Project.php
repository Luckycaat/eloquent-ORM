<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'orcamento', 'data_inicio', 'data_final'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
