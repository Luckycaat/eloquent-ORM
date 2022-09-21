<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Saudacao extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  string $nome
     * @return void
     */
    public function __invoke(string $nome = 'Pedro')
    {
        return view('saudacao', [
            'nome' => $nome,
        ]);
        // return view('saudacao')->with('nome', $nome);

    }
}
