@extends('adminlte::page')

@section('title', 'Nova Entrada')

@section('content_header')
<h1>Nova Entrada</h1>
@stop
@section('content')
<!--Conteudo formulario-->
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'entradaproduto.store']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::label('id_fornecedor', 'Fornecedor') !!}
                    <select class="form-control" name="id_fornecedor" id="id_fornecedor">
                    <option value="">SELECIONE</option>
                    @foreach ($fornecedores as $fornecedor)
                    <option value="{{$fornecedor->id}}">{{$fornecedor->fornecedor}}</option>
                    @endforeach 
                    </select>
                    </select>
                </div>
                <div class="col-sm-2">
                    {!! Form::label('notafiscal', 'Nota Fiscal') !!}
                    {!! Form::text('notafiscal',null, ['class'=>'form-control', 'placeholder'=>'Nota Fiscal...']) !!}
                    @error('marca')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-2">
                    {!! Form::label('data_emissao', 'Data Emissao') !!}
                    {!! Form::date('data_emissao',null, ['class'=>'form-control', 'placeholder'=>'Data Emissao...']) !!}
                    @error('marca')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-2">
                    {!! Form::label('valor', 'Valor Nota') !!}
                    {!! Form::text('valor',null, ['class'=>'form-control', 'placeholder'=>'Valor Nota...']) !!}
                    @error('marca')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-2">
                    {!! Form::label('xml', 'XML NOTA') !!}
                    {!! Form::file('xml', ['class' => 'form-control-file']) !!}
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col-md-11">
                <H2>Itens Nota</H2>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalitem"> Novo Item</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalitem" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Novo Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                    <div class="col-sm-6">
                    {!! Form::label('id_equipamento', 'Equipamento') !!}
                    <select class="form-control" name="id_equipamento" id="id_equipamento">
                        <option value="">SELECIONE</option>
                        <option value="0">EC500</option>
                        <option value="1">EC900</option>
                        <option value="2">Coordenador</option>
                    </select>
                    </div>
                    <div class="col-sm-3">
                    {!! Form::label('quantidade', 'Quantidade') !!}
                    {!! Form::text('quantidade',null, ['class'=>'form-control', 'placeholder'=>'Qte...']) !!}
                    @error('marca')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    {!! Form::label('patrimonio', 'Patrimonio') !!}
                    {!! Form::text('patrimonio',null, ['class'=>'form-control', 'placeholder'=>'Patrimonio...']) !!}
                    @error('marca')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-3">
                    {!! Form::label('hostname', 'HostName') !!}
                    {!! Form::text('hostname',null, ['class'=>'form-control', 'placeholder'=>'HostName...']) !!}
                    @error('marca')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-4">
                    {!! Form::label('armazenamento', 'Armazenamento') !!}
                    {!! Form::text('armazenamento',null, ['class'=>'form-control', 'placeholder'=>'Armazenamento...']) !!}
                    @error('marca')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-3">
                    {!! Form::label('numserie', 'Num Serie') !!}
                    {!! Form::text('numserie',null, ['class'=>'form-control', 'placeholder'=>'Num Serie...']) !!}
                    @error('marca')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-2">
                    {!! Form::label('memoria_ram', 'RAM') !!}
                    {!! Form::text('memoria_ram',null, ['class'=>'form-control', 'placeholder'=>'RAM...']) !!}
                    @error('marca')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar Item</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="form-group">
            <div class="row">
                <table id="filial" class="table table-striped">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Equipamento</th>
                            <th>Quantidade</th>
                            <th>Numero Serie</th>
                            <th>Patrimonio</th>
                            <th>Hostname</th>
                            <th>Armazenamento</th>
                            <th>Memoria RAM</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="200px">
                                <form action="" method="POST">
                                    <a href="" class="btn btn-primary">Editar</a>
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="Eliminar" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
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