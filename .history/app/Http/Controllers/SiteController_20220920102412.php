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
        echo "Conteúdo dinâmico Sobre";
        //return view('welcome');
    }

    public function servicos(){

    }

    public function serivco(){

    }
}
