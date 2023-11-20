@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/createFile.css">
@endsection

@section('content')
<div class="page">
    <form action="{{route('create-file')}}" method="post">
        @csrf
        <h2>+</h2>
        <div class="input_box">
            <input type="text" name="title" placeholder="Titulo...">
        </div>
        <div class="input_box">
            <textarea name="content" placeholder="Conteudo..."></textarea>
        </div>
    
        <div class="input_box">
            <input type="date" name="date">
        </div>

        <div class="input_box">
            <input type="submit" value="Cadastrar">
        </div>

    </form>
</div>
@endsection