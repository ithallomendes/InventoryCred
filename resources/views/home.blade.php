@extends('adminlte::page')

@section('title', 'InventoryCred')

@section('content_header')
<br>
@stop

@section('content')
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">InventoryCRED</h1>
          <p class="lead text-muted">Lorem ipsum dolor sit amet. Et sunt velit nam eius minima est delectus porro hic velit magnam eum dolorem rerum quo autem dolor ex suscipit quod. Aut dolorem consequatur aut quia maiores aut delectus corporis a delectus temporibus aut</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Saiba Mais</a>
          </p>
        </div>
      </section>
<div class="conteiner-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Chamados Abertos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Saber Mais<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53</sup></h3>
                    <p>Chamados Finalizado</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Verificar<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>Micros Disponiveis</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Verificar<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Micros Utilizado</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">Verificar<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop