<?php

use App\Models\OrdemServico;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/cadastra-ordem', function (Request $request) {
    OrdemServico::create([
    'nome' => $request->input('txtNome'),
    'cpf' => $request->input('txtCpf'),
    'telefone' => $request->input('txtTelefone'),
    'email' => $request->input('txtEmail'),
    'aparelho' => $request->input('txtAparelho'),
    'marca' => $request->input('txtMarca'),
    'numserie' => $request->input('txtSerie'),
    'problema' => $request->input('txtProblema'),
    'pedidoServico' => $request->input('txtPedido'),
    ]);
 
     echo ("<script> 
                alert('Ordem de serviço cadastrado com sucesso !')
            </script>");
});