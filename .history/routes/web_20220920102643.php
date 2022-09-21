<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);

Route::get('/sobre', [SiteController::class, 'sobre']);

Route::get('/servicos', [SiteController::class, 'servicos']);

Route::get('/servico/{id}', [SiteController::class, 'servi']);

Route::get('/saudacao/{nome?}', function (string $nome = 'Pedro') {
    echo "Olá $nome";
});
