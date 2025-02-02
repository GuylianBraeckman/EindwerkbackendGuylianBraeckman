@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Edit Brands</h1>
        </div>
        <div class="col-12">

            @include('includes.form_error')
            {!! Form::open(['method'=>'POST', 'action'=>'AdminBrandsController@store', 'files'=>false]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::text('description', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('create Brand', ['class'=>'btn btn-success rounded-0'])
                 !!}
            </div>
            {!! Form::close() !!}
            {!! Form::close() !!}


        </div>
    </div>

@endsection
