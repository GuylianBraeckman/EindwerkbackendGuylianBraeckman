@extends('layouts.admin')
@section('title')
    All BRANDS
@endsection
@section('content')
    <h1>Brands</h1>
    <hr>
    <a href="{{route('brands.create')}}" class="btn btn-outline-primary btn-sm border-left-primary">
        <i class="fa fa-plus-circle"></i>
        Create Brand
    </a>
    <div class="col-12 mt-3">
        <table class="table table-striped">

            <tr>
                <th scope="row">Id</th>
                <th scope="row">Name</th>
                <th scope="row">Description</th>
                <th scope="row">Created At</th>
                <th scope="row">Updated At</th>
            </tr>

            <tbody>
            @if($brands)
                @foreach($brands as $brand)
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td>
                            <a href="{{route('brands.edit', $brand->id)}}"> {{$brand->name}}</a>
                        </td>
                        <td>{{$brand->description}}</td>
                        <td>{{$brand->created_at}}</td>
                        <td>{{$brand->updated_at}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
