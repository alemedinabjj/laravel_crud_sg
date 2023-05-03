<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '00.000.000/0000-00'],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'S', 'cnpj' => '00.000.000/0000-00'],
            2 => ['nome' => 'Fornecedor 3', 'status' => 'S', 'cnpj' => '00.000.000/0000-00'],
            3 => ['nome' => 'Fornecedor 4', 'status' => 'N', 'cnpj' => ''],
            4 => ['nome' => 'Fornecedor 5', 'status' => 'N'],
        ];

        $teste = 'Testando segundo parametro do compact';

        $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado'; //isset verifica se a variável existe e se ela não é nula

        echo $msg;

        // $fornecedores = [];

        return view('app.fornecedor.index', compact('fornecedores', 'teste'));
    }
}
