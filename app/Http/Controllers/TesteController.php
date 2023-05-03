<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste() {

        $produtos = [
            ['nome' => 'Produto 1', 'preco' => '100'],
            ['nome' => 'Produto 2', 'preco' => '200'],
            ['nome' => 'Produto 3', 'preco' => '300'],
            ['nome' => 'Produto 4', 'preco' => '400'],
            ['nome' => 'Produto 5', 'preco' => '500'],
            ];

            //foreach ($produtos as $produto) {
            //    echo $produto['nome'] . '<br>';
            //}
            

        return view('site.teste', compact('produtos')); 

    }
}
