@extends('layouts.admin')
@section('title')
    DASHBOARD
@endsection
@section('content')


    <h1 class="text-primary">All Products</h1>
    <hr>
    <div class="row">
        <div class="col-12">
            <a href="{{route('photos.create')}}" class="btn btn-outline-primary btn-sm border-left-primary">
                <i class="fa fa-plus-circle"></i>
                Create Photo
            </a>
        </div>
        <div class="col-12 mt-3">
            <table class="table table-bordered table-hover table-sm shadow rounded" id="brands-table">
                <thead class="bg-primary text-white">
                <tr>
                    <th scope="row">Id</th>
                    <th scope="row">Image</th>
                    <th scope="row">Name</th>
                    <th scope="row">Created At</th>
                    <th scope="row">Updated At</th>
                </tr>
                </thead>
                <tbody>
                @if($photos)
                    @foreach($photos as $photo)
                        <tr>
                            <td>{{$photo->id}}</td>

                            <td><img height="62" src="{{$photo->file ? asset($photo->file) :
                            'http:/placehold
                            .it/62x62'}}" alt=""></td>
                            <td>{{$photo->name}}</td>
                            <td>{{$photo->created_at}}</td>
                            <td>{{$photo->updated_at}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
