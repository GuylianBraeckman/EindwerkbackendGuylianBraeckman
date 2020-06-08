@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Categories</h1>
        </div>
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::model($categories,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update',
            $categories->id]]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::text('description', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-success rounded-0'])
                 !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $categories->id] ]) !!}
            <div class="form-group">
                {!! Form::submit('Delete Category', ['class' => 'btn btn-danger rounded-0']) !!}
            </div>
            {!! Form::close() !!}


        </div>
    </div>

@endsection
