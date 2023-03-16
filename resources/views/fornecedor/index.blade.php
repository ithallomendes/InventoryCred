@extends('adminlte::page')

@section('title', 'InventoryCred')

@section('content_header')
<h1>Fornecedores</h1>
@stop

@section('content')
<!--Mensagem de ação-->
@if (session('mensagem'))
<div class="alert alert-success">
    <strong>{{session('mensagem')}}</strong>
</div>

@endif
<!--Conteudo formulario-->
<div class="card-body">
    <a href="{{route('fornecedor.create')}}" class="btn btn-success">Cadastrar</a>
</div>
<div class="card">
    <div class="card-body">
        <table id="fornecedor" class="table table-striped">
            <thead class="bg-secondary text-white">
                <tr>
                    <th>ID</th>
                    <th>Fornecedor</th>
                    <th>CNPJ</th>
                    <th>IE</th>
                    <th>Cidade</th>
                    <th>Contato</th>
                    <th>Telefone</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fornecedores as $fornecedor)
                <tr>
                    <td>{{$fornecedor->id}}</td>
                    <td>{{$fornecedor->fornecedor}}</td>
                    <td>{{$fornecedor->cnpj}}</td>
                    <td>{{$fornecedor->ie}}</td>
                    <td>{{$fornecedor->cidade}}</td>
                    <td>{{$fornecedor->contato}}</td>
                    <td>{{$fornecedor->telefone}}</td>
                    <td width="200px">
                        <form action="{{route('fornecedor.destroy',$fornecedor)}}" method="POST">
                        <a href="{{route('fornecedor.edit',$fornecedor)}}" class="btn btn-primary">Editar</a>
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
        $('#fornecedor').DataTable( {
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