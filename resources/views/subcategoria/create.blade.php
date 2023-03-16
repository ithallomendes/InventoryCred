@extends('adminlte::page')

@section('title', 'Nova SubCategoria')

@section('content_header')
<h1>Nova SubCategoria</h1>
@stop
@section('content')
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'subcategoria.store']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::label('id_categoria', 'Categoria') !!}
                    <select class="form-control" name="id_categoria" id="id_categoria">
                    <option value="">SELECIONE</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                    @endforeach 
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
                {!! Form::submit('Salvar', ['class'=>'form-control btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

</div>
@stop