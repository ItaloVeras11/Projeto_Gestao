<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao, $perfil)
    {
        echo $metodo_autenticacao. '-' .$perfil. '<br>';

        if($metodo_autenticacao == 'padrao'){
            echo 'Verificar usuario e Senha no Banco de dados';
        }

        if($metodo_autenticacao == 'ldap'){
            echo 'Verificar o Usuario e Senha no AD';
        }

        if($perfil == 'visitante'){
            echo 'Exibir apenas alguns recursos';
        }else {
            echo 'Carregar Perfil No Banco  de dados';
        }

        //Verifica se o usuario possui acesso a rota
        if(true){
            return $next($request);
        } else {
            return Response('Acesso Negado Rota Exige Autenticaçao');
        }
        //return $next($request);
        

    }
}
