@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/file.css">
@endsection

@section('content')
<div class="page">
    <div class="file">
        <h1>{{$file['title']}} - <span>{{date('d/m', strtotime($file['date']))}}</span></h1>
        
        <p>{{$file['content']}}</p>

    </div>
</div>
@endsection
