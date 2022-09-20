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

});

Route::get('/servico/{id}', function (int $id) {

});

Route::get('/saudacao/{nome?}', function (string $nome = 'Pedro') {
    echo "Olá $nome";
});
