@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <h1>Edit Brand</h1>
    </div>
    <div class="col-12">
        @include('includes.form_error')
        {!! Form::model($brand,['method'=>'PATCH', 'action'=>['AdminBrandsController@update',
            $brand->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::text('description', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('update Brand', ['class'=>'btn btn-success rounded-0'])
             !!}
        </div>
        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminBrandsController@destroy', $brand->id] ]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Brand', ['class' => 'btn btn-danger rounded-0']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
