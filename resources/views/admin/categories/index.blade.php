@extends('layouts.admin')
@section('title')
    All CATEGORIES
@endsection
@section('content')
    <h1 class="text-primary">All CATEGORIES</h1>
    <hr>
    <a href="{{route('categories.create')}}" class="btn btn-outline-primary btn-sm border-left-primary">
        <i class="fa fa-plus-circle"></i>
        Create Category
    </a>
    <div class="col-12 mt-3">
        <table class="table table-bordered table-hover table-sm shadow rounded" id="brands-table">
            <thead class="bg-primary text-white">
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Name</th>
                <th scope="row">Description</th>
                <th scope="row">Created At</th>
                <th scope="row">Updated At</th>
            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>
                            <a href="{{route('categories.edit', $category->id)}}"> {{$category->name}}</a>
                        </td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection

