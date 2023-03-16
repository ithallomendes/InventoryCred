@extends('adminlte::page')

@section('title', 'Nova Marca')

@section('content_header')
<h1>Nova Marca</h1>
@stop
@section('content')
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'marca.store']) !!}
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
                {!! Form::submit('Salvar', ['class'=>'form-control btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>


</div>
@stop