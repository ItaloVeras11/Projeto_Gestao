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
                    <input type="text" name="nome" value="" id="" placeholder="Nome" class="borda-preta">
                    

                    <input type="text" name="site" value="" id="" placeholder="Site" class="borda-preta">
                    

                    <input type="text" name="uf" value="" id="" placeholder="UF" class="borda-preta">
                    

                    <input type="text" name="email" value="" id="" placeholder="E-mail" class="borda-preta">
                    

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>

        </div>



    </div>
@endsection