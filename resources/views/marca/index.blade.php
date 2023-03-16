@extends('adminlte::page')

@section('title', 'InventoryCred')

@section('content_header')
    <h1>Marcas</h1>
@stop
<!--Mensagem de ação-->
@section('content')
@if (session('mensagem'))
    <div class="alert alert-success">
    <strong>{{session('mensagem')}}</strong>
</div>

@endif
<div class="card-body">
    <a href="{{route('marca.create')}}" class="btn btn-success">Cadastrar</a>
</div>
    <div class="card">
        <div class="card-body">
            <table id="marca" class="table table-striped">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marcas as $marca)
                    <tr>
                        <td>{{$marca->id}}</td>
                        <td>{{$marca->marca}}</td>
                        <td width="200px">    
                            <form action="{{route('marca.destroy',$marca)}}" method="POST">
                            <a href="{{route('marca.edit',$marca)}}" class="btn btn-primary">Editar</a>
                                @method('delete')
                                @csrf
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>    
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" class="rel">
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#marca').DataTable( {
            "language" : {
                "search": "Buscar",
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "paginate": {
                    "previous" : "Anterior",
                    "next" : "Proximo",
                    "first": "Primeiro",
                    "last": "Ultimo"
                }
            }
        });
    });
</script>
@endsection