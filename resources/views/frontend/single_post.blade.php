@extends('layouts.front')
@section('title')
    {{$blog->title}}
@endsection
@section('content')
    <div class="titeltjeblogs mb-5">
        <div class="container">
            <h1 class="text-white">{{$blog->title}}</h1>
        </div>
    </div>

    <div class="container">
        {{$blog->content}}
    </div>
@endsection
