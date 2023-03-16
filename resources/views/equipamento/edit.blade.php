@extends('adminlte::page')

@section('title', 'Editar Equipamento')

@section('content_header')
<h1>Editar Equipamento{{$equipamento->descricao}}</h1>
@stop
@section('content')
<!--Mensagem de Ação-->
@if (session('mensagem'))
    <div class="alert alert-success">
    <strong>{{session('mensagem')}}</strong>
</div>
@endif
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
    {!! Form::model($equipamento,['route'=>['equipamento.update',$equipamento],
                                    'method'=>'put']) !!}
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
                    <option value="{{$categoria->id}}" @if($equipamento->id_categoria == $categoria->id) selected @endif >{{$categoria->categoria}}</option>
                    @endforeach 
                    </select>
                </div>
                <div class="col-sm-3">
                    {!! Form::label('id_subcategoria', 'SubCategoria') !!}
                    {!! Form::select('id_subcategoria',[], null, ['class' => 'form-control']) !!}
                </div>

                <div class="col-sm-3">
                    {!! Form::label('id_marca', 'Marca') !!}
                    <select class="form-control" name="id_marca" id="id_marca">
                    <option value="">SELECIONE</option>
                    @foreach ($marcas as $marca)
                    <option value="{{$marca->id}}" @if($equipamento->id_marca == $marca->id) selected @endif >{{$marca->marca}}</option>
                    @endforeach 
                    </select>
                </div>
                <div class="col-sm-3">
                    {!! Form::label('id_modelo', 'Modelo') !!}
                    <select class="form-control" name="id_modelo" id="id_modelo">
                    <option value="">SELECIONE</option>
                    @foreach ($modelos as $modelo)
                    <option value="{{$modelo->id}}" @if($equipamento->id_modelo == $modelo->id) selected @endif >{{$modelo->modelo}}</option>
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
                {!! Form::submit('Atualizar', ['class'=>'form-control btn btn-primary']) !!}
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

