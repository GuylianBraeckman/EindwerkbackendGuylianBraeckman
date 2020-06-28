@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create Post</h1>
        </div>
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::open(['method'=>'POST', 'action'=>'AdminPhotosController@store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Photo', ['class'=>'btn btn-success rounded-0'])
                 !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

