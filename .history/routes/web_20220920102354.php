<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {

});

Route::get('/sobre', function () {
    
});

Route::get('/servicos', function () {
    echo "Conteúdo dinâmico Serviços";
});

Route::get('/servico/{id}', function (int $id) {
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
});

Route::get('/saudacao/{nome?}', function (string $nome = 'Pedro') {
    echo "Olá $nome";
});
