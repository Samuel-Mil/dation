@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/listFiles.css">
@endsection

@section('content')
<div class="page">
    <div class="list-wrapper">

        @foreach ($files as $file)
        <div class="list-single">
            <p>{{date('d/m', strtotime($file['date']))}}</p>
            <div class="box">
                <p><a href="{{route('show-file',$file['id'])}}">{{$file['title']}}</a></p>
            </div>
        </div><!--list-single-->
        @endforeach


        <div class="list-single-create">
            <a href="{{route('create-file-page')}}">+</a>
        </div><!--list-single-->
    </div>
</div>
@endsection