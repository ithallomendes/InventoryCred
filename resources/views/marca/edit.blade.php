@extends('adminlte::page')

@section('title', 'Editar Marca')

@section('content_header')
<h1>Editar Marca {{$marca->marca}}</h1>
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
    {!! Form::model($marca,['route'=>['marca.update',$marca],
                                    'method'=>'put']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::label('marca', 'Marca') !!}
                    {!! Form::text('marca',null, ['class'=>'form-control', 'placeholder'=>'Marca...']) !!}
                    @error('marca')
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