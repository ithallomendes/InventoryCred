@extends('adminlte::page')

@section('title', 'Editar Fornecedor')

@section('content_header')
<h1>Editar {{$fornecedor->fornecedor}}</h1>
@stop
@section('content')
<!--Mensagem de ação-->
@if (session('mensagem'))
<div class="alert alert-success">
    <strong>{{session('mensagem')}}</strong>
</div>
@endif
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
        {!! Form::model($fornecedor,['route'=>['fornecedor.update',$fornecedor],
                                    'method'=>'put']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::label('fornecedor', 'Fornecedor') !!}
                    {!! Form::text('fornecedor',null, ['class'=>'form-control', 'placeholder'=>'Fornecedor...']) !!}
                    @error('fornecedor')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    {!! Form::label('cnpj', 'CNPJ') !!}
                    {!! Form::text('cnpj',null, ['class'=>'form-control', 'placeholder'=>'CNPJ...']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('ie', 'IE') !!}
                    {!! Form::text('ie',null, ['class'=>'form-control', 'placeholder'=>'IE...']) !!}
                </div>
                <div class="col-sm-2">
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

                <div class="col-sm-3">
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


                <div class="col-sm-3">
                    {!! Form::label('contato', 'Contato') !!}
                    {!! Form::text('contato',null, ['class'=>'form-control', 'placeholder'=>'Contato...']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('telefone', 'Telefone') !!}
                    {!! Form::text('telefone',null, ['class'=>'form-control', 'placeholder'=>'Telefone..']) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email',null, ['class'=>'form-control', 'placeholder'=>'Email...']) !!}
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