@extends('layouts.admin')


@section('content')

    <h1>Edit Users</h1>

    <div class="col-sm-3">

        <img src="{{ $user->photo ? $user->photo->file : '/images/noimage.jpg' }}" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-sm-9">


        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('role_id', 'Role') !!}
                {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status') !!}
                {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo') !!}
                {!! Form::file('photo_id',['class' => 'form-control']) !!}
            </div>

            <br>
            <div class="form-group">
                {!! Form::submit('Update User', ['class' => 'btn btn-danger btn-block']) !!}
            </div>


        {!! Form::close() !!}


    </div>

    <div class="row">
        <div class="col-sm-12">
            @include('includes.form_errors')
        </div>
    </div>

@endsection