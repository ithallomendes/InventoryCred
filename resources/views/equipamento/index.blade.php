@extends('adminlte::page')

@section('title', 'InventoryCred')

@section('content_header')
<h1>Equipamentos</h1>
@stop
<!--Mensagem de ação-->
@section('content')
@if (session('mensagem'))
<div class="alert alert-success">
    <strong>{{session('mensagem')}}</strong>
</div>

@endif
<!--Conteudo formulario-->
<div class="card-body">
    <a href="{{route('equipamento.create')}}" class="btn btn-success">Cadastrar</a>
</div>
<div class="card">
    <div class="card-body">
        <table id="equipamento" class="table table-striped">
            <thead class="bg-secondary text-white">
                <tr>
                    <th>ID</th>
                    <th>Descricao</th>
                    <th>Categoria</th>
                    <th>SubCategoria</th>
                    <th>Valor</th>
                    <th>Estoque</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipamentos as $equipamento)
                <tr>
                    <td>{{$equipamento->id}}</td>
                    <td>{{$equipamento->descricao}}</td>
                    <td>{{$equipamento->id_categoria}}</td>
                    <td>{{$equipamento->id_subcategoria}}</td>
                    <td>{{$equipamento->valor}}</td>
                    <td>{{$equipamento->estoque}}</td>
                    <td width="200px">
                        <form action="{{route('equipamento.destroy',$equipamento)}}" method="POST">
                        <a href="{{route('equipamento.edit',$equipamento)}}" class="btn btn-primary">Editar</a>
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
        $('#equipamento').DataTable( {
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
