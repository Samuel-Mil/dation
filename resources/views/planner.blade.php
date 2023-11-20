@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/planner.css">
@endsection

@section('content')
<div class="page">
    <div class="title">
        <h1>Planner Financeiro</h1>
    </div>

    <div class="table">
        <ul class="row">
            <li><b>Data</b></li>
            <li><b>Descrição</b></li>
            <li><b>Valor</b></li>
        </ul>


        @foreach ($planners as $planner)
            
        <ul class="row">
            <li>{{date('d/m', strtotime($planner['date']))}}</li>
            <li>{{$planner['description']}}</li>
            <li>R$ {{$planner['price']}}</li>
        </ul>
        @endforeach

        

        

        <ul class="row">
            <li>.</li>
            <li>.</li>
            <li><b>Total:</b> R$ {{$total}}</li>
        </ul>
    </div>

    <div>
        <a href="{{route('create-planner-page')}}" class="create">Adicionar</a>
    </div>

    <br>
    <br>
    <br>
    <br>

</div>
@endsection