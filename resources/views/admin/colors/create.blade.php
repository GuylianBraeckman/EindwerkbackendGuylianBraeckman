@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <h1>Create Color</h1>
    </div>
    <div class="col-12">
        @include('includes.form_error')
        {!! Form::open(['method'=>'POST', 'action'=>'AdminColorsController@store', 'files'=>false]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Color', ['class'=>'btn btn-success rounded-0'])
             !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
