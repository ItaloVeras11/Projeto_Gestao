@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">

            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="{{ route('app.fornecedor.adicionar')}}" method="post">
                    @csrf
                    <input type="text" name="nome" id="" placeholder="Nome" class="borda-preta">
                    {{ $errors->has('nome') ? $erros->first('nome') : ''}}

                    <input type="text" name="site" id="" placeholder="Site" class="borda-preta">
                    {{ $errors->has('site') ? $erros->first('site') : ''}}

                    <input type="text" name="uf" id="" placeholder="UF" class="borda-preta">
                    {{ $errors->has('uf') ? $erros->first('uf') : ''}}

                    <input type="text" name="email" id="" placeholder="E-mail" class="borda-preta">
                    {{ $errors->has('email') ? $erros->first('email') : ''}}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>

        </div>



    </div>
@endsection