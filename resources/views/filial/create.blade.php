@extends('adminlte::page')

@section('title', 'Nova Filial')

@section('content_header')
<h1>Nova Filial</h1>
@stop

@section('content')
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'filial.store']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-1">
                    {!! Form::label('filial', 'Filial') !!}
                    {!! Form::text('filial',null, ['class'=>'form-control', 'placeholder'=>'Filial...']) !!}
                    @error('filial')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    {!! Form::label('regional', 'Regional') !!}
                    {!! Form::text('regional',null, ['class'=>'form-control', 'placeholder'=>'Regional...']) !!}
                    @error('regional')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    {!! Form::label('cep', 'CEP') !!}
                    {!! Form::text('cep',null, ['class'=>'form-control', 'placeholder'=>'CEP...']) !!}
                    @error('cep')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-5">
                    {!! Form::label('endereco', 'Endereço') !!}
                    {!! Form::text('endereco',null, ['class'=>'form-control', 'placeholder'=>'Endereço...']) !!}
                    @error('endereco')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>



                <div class="col-sm-4">
                    {!! Form::label('bairro', 'Bairro') !!}
                    {!! Form::text('bairro',null, ['class'=>'form-control', 'placeholder'=>'Bairro...']) !!}
                    @error('bairro')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    {!! Form::label('cidade', 'Cidade') !!}
                    {!! Form::text('cidade',null, ['class'=>'form-control', 'placeholder'=>'Cidade...']) !!}
                    @error('cidade')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-1">
                    {!! Form::label('estado', 'Estado') !!}
                    {!! Form::text('estado',null, ['class'=>'form-control', 'placeholder'=>'Estado...']) !!}
                    @error('estado')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-4">
                    {!! Form::label('cnpj', 'CNPJ') !!}
                    {!! Form::text('cnpj',null, ['class'=>'form-control', 'placeholder'=>'CNPJ...']) !!}
                </div>



                <div class="col-sm-2">
                    {!! Form::label('ie', 'Insc Estadual:') !!}
                    {!! Form::text('ie',null, ['class'=>'form-control', 'placeholder'=>'Insc Estadual...']) !!}
                </div>
                <div class="col-sm-2">
                    {!! Form::label('gerente', 'Gerente') !!}
                    {!! Form::text('gerente',null, ['class'=>'form-control', 'placeholder'=>'Gerente...']) !!}
                </div>
                <div class="col-sm-2">
                    {!! Form::label('coordenador', 'Coordenador') !!}
                    {!! Form::text('coordenador',null, ['class'=>'form-control', 'placeholder'=>'Coordenador...']) !!}
                </div>
                <div class="col-sm-2">
                    {!! Form::label('telgerente', 'Telefone Gerente') !!}
                    {!! Form::text('telgerente',null, ['class'=>'form-control', 'placeholder'=>'Telefone Gerente...']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('inauguracao', 'Inauguração') !!}
                    {!! Form::text('inauguracao',null, ['class'=>'form-control', 'placeholder'=>'Inauguração...']) !!}
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