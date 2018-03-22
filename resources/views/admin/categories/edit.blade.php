@extends('layouts.admin')


@section('content')

    <h1>Edit Category</h1>


    {!! Form::model($category, ['method' => 'PATCH', 'action' => ['AdminCategoriesController@update', $category->id ] ]) !!}
    
        <div class="form-group">
            {!! Form::label('name', 'Category') !!}
            {!! Form::text('name', null , ['class' => 'form-control']) !!}
        </div>

        <div>
            {!! Form::submit('Update Categoris', ['class' => 'btn btn-primary col-sm-3']) !!}
        </div>

    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id]]) !!}

        <div>
            {!! Form::submit('Delete Categoris', ['class' => 'btn btn-danger col-sm-3']) !!}
        </div>

    {!! Form::close() !!}

@endsection