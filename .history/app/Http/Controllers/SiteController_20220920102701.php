<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        echo "Conteúdo dinâmico Home";
        //return view('welcome');
    }

    public function sobre(){
        $soma = 9+10;
        echo "Soma total = $soma";
    }

    public function servicos(){
        echo "Conteúdo dinâmico Serviços";
    }

    public function serivco(int $id){
        $servicos = [
            1 => [
                'nome' => 'Lavagem de Roupa',
                'descricao' => 'Descrição de uma lavagem de roupas...'
            ],
            2 => [
                'nome' => 'Lavagem de Cobertas',
                'descricao' => 'Descrição de uma lavagem de cobertas...'
            ],
            3 => [
                'nome' => 'Lavagem de Animais',
                'descricao' => 'Descrição de uma lavagem de animais...'
            ],
        ];
        echo $servicos[$id]['nome'];
        echo "<br>";
        echo $servicos[$id]['descricao'];
    }
}
