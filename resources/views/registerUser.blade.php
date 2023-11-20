@extends('layouts.auth')

@section('head')
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/login.css">
@endsection

@section('content')
<div class="page">
    <div class="title">
        <h1>Dation</h1>
    </div>

    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="input_box">
            <label for="name">Nome</label>
            <input type="text" name="name" placeholder="Nome...">
        </div>
        <div class="input_box">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Email...">
        </div>
        <div class="input_box">
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Senha...">
        </div>

        <input type="submit" value="Entrar">
    </form>
</div>
@endsection