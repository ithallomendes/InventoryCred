@extends('adminlte::page')

@section('title', 'Novo Modelo')

@section('content_header')
<h1>Novo Modelo</h1>
@stop
@section('content')
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'modelo.store']) !!}
        <div class="form-group">
        <div class="row">
        <div class="col-sm-4">
                    {!! Form::label('id_marca', 'Marca') !!}
                    <select class="form-control" name="id_marca" id="id_marca">
                    <option value="">SELECIONE</option>
                    @foreach ($marcas as $marca)
                    <option value="{{$marca->id}}">{{$marca->marca}}</option>
                    @endforeach 
                    </select>
                </div>
                <div class="col-sm-4">
                    {!! Form::label('modelo', 'Modelo') !!}
                    {!! Form::text('modelo',null, ['class'=>'form-control', 'placeholder'=>'Marca...']) !!}
                    @error('modelo')
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