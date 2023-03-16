@extends('adminlte::page')

@section('title', 'Novo Equipamento')

@section('content_header')
<h1>Novo Equipamento</h1>
@stop
@section('content')
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'equipamento.store']) !!}
        <div class="form-group">
            <div class="row">
            <div class="col-sm-6">
                    {!! Form::label('descricao', 'Descrição') !!}
                    {!! Form::text('descricao',null, ['class'=>'form-control', 'placeholder'=>'Categoria...']) !!}
                    @error('descricao')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    {!! Form::label('id_categoria', 'Categoria') !!} 
                    <select class="form-control" name="id_categoria" id="id_categoria">
                    <option value="">SELECIONE</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                    @endforeach 
                    </select>
                </div>
                <div class="col-sm-3">
                    {!! Form::label('id_subcategoria', 'Subcategoria') !!} 
                    <select class="form-control" name="id_subcategoria" id="id_subcategoria">
                    <option value="">SELECIONE</option>
                    @foreach ($subcategorias as $subcategoria)
                    <option value="{{$subcategoria->id}}">{{$subcategoria->subcategoria}}</option>
                    @endforeach 
                    </select>
                </div>

                <div class="col-sm-3">
                    {!! Form::label('id_marca', 'Marca') !!}
                    <select class="form-control" name="id_marca" id="id_marca">
                    <option value="">SELECIONE</option>
                    @foreach ($marcas as $marca)
                    <option value="{{$marca->id}}">{{$marca->marca}}</option>
                    @endforeach 
                    </select>
                </div>
                <div class="col-sm-3">
                    {!! Form::label('id_modelo', 'Modelo') !!}
                    <select class="form-control" name="id_modelo" id="id_modelo">
                    <option value="">SELECIONE</option>
                    @foreach ($modelos as $modelo)
                    <option value="{{$modelo->id}}">{{$modelo->modelo}}</option>
                    @endforeach 
                    </select>
                </div>
                <div class="col-sm-1">
                    {!! Form::label('estoque', 'Estoque') !!}
                    {!! Form::text('estoque',null, ['class'=>'form-control', 'placeholder'=>'Estoque...']) !!}
                </div>
                <div class="col-sm-1">
                    {!! Form::label('estoquemin', 'EstoqMin') !!}
                    {!! Form::text('estoquemin',null, ['class'=>'form-control', 'placeholder'=>'Estoque Min...']) !!}
                </div>
                <div class="col-sm-2">
                    {!! Form::label('valor', 'Valor') !!}
                    {!! Form::text('valor',null, ['class'=>'form-control', 'placeholder'=>'Valor...']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                {!! Form::submit('Salvar', ['class'=>'form-control btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>


</div>
@stop

@section('js')
<script>
$(document).ready(function() {
  // ouve o evento de mudança nos campos select
  $('#id_modelo, #id_marca').change(function() {
    // obtém o valor selecionado nos campos de marca, modelo e categoria
    var modeloSelecionadoID = $('#id_modelo').val();
    var marcaSelecionadaID = $('#id_marca').val();
    // busca o nome da categoria correspondente ao ID selecionado
    var modeloSelecionadoNome = $('#id_modelo option:selected').text();
    var marcaSelecionadaNome = $('#id_marca option:selected').text();
    // concatena os valores selecionados e atualiza o campo de descrição
    $('#descricao').val(marcaSelecionadaNome + ' ' + modeloSelecionadoNome);
  });
});
</script>
@endsection

