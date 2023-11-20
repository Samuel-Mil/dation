@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/createFile.css">
@endsection

@section('content')
<div class="page">
    <form action="{{route('create-planner')}}" method="post">
        @csrf
        <h2>+</h2>
        <div class="input_box">
            <input type="date" name="date" placeholder="Data...">
        </div>
        
        <div class="input_box">
            <textarea name="description" placeholder="Descrição..."></textarea>
        </div>
    
        <div class="input_box">
            <input type="text" name="price" placeholder="Preço...">
        </div>

        <div class="input_box">
            <input type="submit" value="Cadastrar">
        </div>

    </form>
</div>
@endsection