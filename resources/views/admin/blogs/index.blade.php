@extends('layouts.admin')
@section('title')
    DASHBOARD
@endsection
@section('content')
    <h1>Blog</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">title</th>
            <th scope="col">content</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($blogs)

            @foreach($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td>

                        <img height="62" src="{{$blog->photo ? asset($blog->photo->file) :'http://placehold.it/62x62'}}" alt="">
                    </td>
                    <td><a href="{{route('blogs.edit', $blog->id)}}">{{$blog->title}}</a></td>
                    <td>{{$blog->content}}</td>
                    <td>{{$blog->created_at}}</td>
                    <td>{{$blog->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
