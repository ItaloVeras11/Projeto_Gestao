<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request){

        $erro = $request->get('erro');
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request){
        
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        $fedback = [
            'usuario.email' => 'O campo usuario (e-mail) é obrigatorio',
            'senha.required' => 'O campo senha é obrigatorio'
        ];

        $request->validate($regras, $fedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');


        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if(isset($usuario->name)){
            echo 'Usuario existe';
        } else {
            echo redirect()->route('site.login', ['erro'=>1]);
        }
    }
}
