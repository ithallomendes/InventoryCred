@extends('adminlte::page')

@section('title', 'Editar SubCategoria')
@section('content_header')
<h1>Editar SubCategoria {{$subcategoria->subcategoria}}</h1>
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
    {!! Form::model($subcategoria,['route'=>['subcategoria.update',$subcategoria],
                                    'method'=>'put']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::label('id_categoria', 'Categoria') !!}
                    <select class="form-control" name="id_categoria" id="id_categoria">
                    <option value="">SELECIONE</option>
                    @foreach ($categorias as $categoria)     
                        <option value="{{$categoria->id}}" @if($subcategoria->id_categoria == $categoria->id) selected @endif >{{$categoria->categoria}}</option>
                        @endforeach
                    </select>
                    </select>
                </div> 
                <div class="col-sm-4">
                    {!! Form::label('subcategoria', 'Sub Categoria') !!}
                    {!! Form::text('subcategoria',null, ['class'=>'form-control', 'placeholder'=>'Categoria...']) !!}
                    @error('subcategoria')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
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