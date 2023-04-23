@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            

            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="" method="post">
                    
                    @csrf
                    <input type="text" name="nome" value="{{$fornecedor->nome ?? old('nome') }}" id="" placeholder="Nome" class="borda-preta">
                    {{ $errors->has('nome') ? $errors->first('nome') : ''}}

                    <input type="text" name="site" value="{{ $fornecedor->site ??  old('site') }}" id="" placeholder="Site" class="borda-preta">
                    {{ $errors->has('site') ? $errors->first('site') : ''}}

                    <input type="text" name="uf" value="{{ $fornecedor->uf ??  old('uf') }}" id="" placeholder="UF" class="borda-preta">
                    {{ $errors->has('uf') ? $errors->first('uf') : ''}}

                    <input type="text" name="email" value="{{ $fornecedor->email ??  old('email') }}" id="" placeholder="E-mail" class="borda-preta">
                    {{ $errors->has('email') ? $errors->first('email') : ''}}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>

        </div>



    </div>
@endsection