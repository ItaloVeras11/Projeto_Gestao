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
            
        };
        return view('app.fornecedor.adicionar');
    }
}
