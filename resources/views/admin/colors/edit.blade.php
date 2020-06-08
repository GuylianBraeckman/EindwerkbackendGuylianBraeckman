@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Colors</h1>
        </div>
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::model($colors,['method'=>'PATCH', 'action'=>['AdminColorsController@update',
            $colors->id]]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Colors', ['class'=>'btn btn-success rounded-0'])
                 !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminColorsController@destroy', $colors->id] ]) !!}
            <div class="form-group">
                {!! Form::submit('Delete Colors', ['class' => 'btn btn-danger rounded-0']) !!}
            </div>
            {!! Form::close() !!}


        </div>
    </div>

@endsection
