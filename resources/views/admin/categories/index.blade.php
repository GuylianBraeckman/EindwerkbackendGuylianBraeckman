@extends('layouts.admin')
@section('title')
    All CATEGORIES
@endsection
@section('content')
    <h1 >All CATEGORIES</h1>
    <hr>
    <a href="{{route('categories.create')}}" class="btn btn-outline-primary btn-sm border-left-primary">
        <i class="fa fa-plus-circle"></i>
        Create Category
    </a>
    <div class="col-12 mt-3">
        <table class="table table-striped">
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Name</th>
                <th scope="row">Description</th>
                <th scope="row">Created At</th>
                <th scope="row">Updated At</th>
                <th scope="row">others</th>

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
                        <td>
                            <a class="btn btn-outline-warning rounded-pill mb-1" href="{{route('categories.edit',
                            $category->id)}}">Edit</a>
                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]])
                           !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete',['class'=>'btn btn-outline-danger rounded-pill mb-1'])
                                     !!}
                                </div>
                                {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection

