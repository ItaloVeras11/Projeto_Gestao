@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem De Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">

            <div style="width: 90%; margin-left: auto; margin-right: auto;">

                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descriçao</th>
                            <th>Peso</th>
                            <th>Unidade - ID</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->peso }}</td>
                            <td>{{ $produto->unidade_id }}</td>
                            <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}"> Excluir </a></td>
                            <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}"> Editar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $fornecedores->appends($request)->links() }}

                <br>

                {{ $fornecedores->count() }} - Total de Registros por Pagina

                <br>

                {{ $fornecedores->total() }} - Total de Registros da Consulta

                <br>

                {{ $fornecedores->firstItem() }} - Numero do primeiro registro da pagina

                <br>

                {{ $fornecedores->lastItem() }} - Numero do Ultimo registro da pagina 

                <br>

                Exibindo {{ $fornecedores->count() }} fornecedores de {{ $fornecedores->total() }} de {{ $fornecedores->firstItem() }} a {{ $fornecedores->lastItem() }}


            </div>

        </div>



    </div>
@endsection
