@extends('layouts.admin')

@section('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">


@endsection


@section('content')

    <h1>Upload Media</h1>

    {!! Form::open(['method' => 'POST', 'action' => 'AdminMediaController@store', 'files' => true, 'class' => 'dropzone']) !!}

        
    {!! Form::close() !!}


@endsection


@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>


@endsection