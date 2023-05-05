@if (isset($produto_detalhe->id))
    <form action="{{ route('produto.update', ['produto' => $produto_detalhe->id]) }}" method="post">
        @csrf
        @method('PUT')
@else
    <form action="{{ route('produto-detalhe.store') }}" method="post">

        @csrf   
@endif
<input type="text" name="produto_id" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}" id="" placeholder="ID do Produto"
    class="borda-preta">
{{ $errors->has('nome') ? $errors->first('nome') : '' }}

<input type="text" name="descricao" value="{{ $produto_detalhe->descricao ?? old('descricao') }}" id=""
    placeholder="Descricao" class="borda-preta">
{{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

<input type="text" name="peso" value="{{ $produto_detalhe->peso ?? old('peso') }}" id=""
    placeholder="Peso" class="borda-preta">
{{ $errors->has('peso') ? $errors->first('peso') : '' }}

<select name="unidade_id">

    <option>-- Selecione Unidade de Medida --</option>

    @foreach ($unidades as $unidade)
        ??
        <option value="{{ $unidade->id }}"
            {{ $produto_detalhe->unidade_id ?? old('unidade_id') == $unidade->id ? 'selected' : '' }}>
            {{ $unidade->descricao }} </option>
    @endforeach


</select>
{{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}


<button type="submit" class="borda-preta">Cadastrar</button>
</form>
