<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        return view('app.fornecedor.index');
    }

    public function listar(){
        return view('app.fornecedor.listar');
    }

    public function adicionar(Request $request){
        
        if($request->inut('_token') != ''){
            $reqgras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required|',
                'uf' => 'required|min:2|max:2',
                'email' => 'email',
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'nome.min' => 'O campo nome deve ter no minimo 3 caracteres',
                'nome.miax' => 'O campo nome deve ter no maximo 40 caracteres',
            ];
        }
        return view('app.fornecedor.adicionar');
    }
}
