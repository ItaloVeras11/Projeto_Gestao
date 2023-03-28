<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){
        //dd($request);
        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        $contato->save();
        */
        /*if(!(empty($request->all()))){
            $contato = new SiteContato();
            $contato->create($request->all());
        }*/

        $motivo_contato = MotivoContato::all();
 
        return view('site.contato', ['motivo_contato' => $motivo_contato]);

 
    }

    public function salvar(Request $request){

        //Realizar a validação dos dados do formulario recebidos
        $request->validate([
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ],
        [
            'nome.required' => 'O campo nome precisa ser preenchido',
            'nome.min' => 'O campo nome precisa ter no minimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no maximo 40 characteres',
            'nome.unique' => 'O nome informado ja esta em uso',
            'telefone.required' => 'O campo telefone precisa ser preenchido',


            'email.email' => 'O campo é Obrigatorio',
            'mensagem.max' => 'A mensagem deve ter no maximo 2000 caracteres',
            'required' => 'O campo :attribute deve ser preenchido',

        ]
    );
        
        SiteContato::create($request->all());
        return redirect()->route('stie.index');
    }
}
