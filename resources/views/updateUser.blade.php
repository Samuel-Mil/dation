@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/update-user.css">
@endsection

@section('content')
<div class="page">
    <form action="{{route('update-user')}}" method="post">
        @csrf
        <h2>Informações do perfil</h2>
        <img src="{{env('APP_URL')}}/assets/profile_pic.svg" alt="profile pic">
        <span>Editar</span>
        <div class="input_box">
            <input type="text" name="name" value="{{$user['name']}}" placeholder="Nome...">
        </div>
        <div class="input_box">
            <input type="text" name="email" value="{{$user['email']}}" placeholder="Email...">
        </div>
        <div class="input_box">
            <input type="password" name="password" placeholder="Senha...">
        </div>

        <input type="submit" value="Atualizar">
    </form>
</div>
@endsection