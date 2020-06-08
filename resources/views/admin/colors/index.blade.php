@extends('layouts.admin')
@section('title')
    All Colors
@endsection
@section('content')
    <h1 class="text-primary">All Colors</h1>
    <hr>
    <a href="{{route('colors.create')}}" class="btn btn-outline-primary btn-sm border-left-primary">
        <i class="fa fa-plus-circle"></i>
        Create color
    </a>
    <div class="col-12 mt-3">
        <table class="table table-bordered table-hover table-sm shadow rounded" id="brands-table">
            <thead class="bg-primary text-white">
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Name</th>
                <th scope="row">Created At</th>
                <th scope="row">Updated At</th>
            </tr>
            </thead>
            <tbody>
            @if($colors)
                @foreach($colors as $color)
                    <tr>
                        <td>{{$color->id}}</td>
                        <td>
                            <a href="{{route('colors.edit', $color->id)}}"> {{$color->name}}</a>
                        </td>
                        <td>{{$color->created_at}}</td>
                        <td>{{$color->updated_at}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
