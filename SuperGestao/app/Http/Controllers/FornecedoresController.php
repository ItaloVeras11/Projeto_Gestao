<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){

        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => ''
            ],

            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S'

            ]
        ];
        
        return view('app.fornecedores.index', compact('forecedores'));
    }
}
