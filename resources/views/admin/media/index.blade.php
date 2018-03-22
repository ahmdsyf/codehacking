@extends('layouts.admin')


@section('content')

    <h1>Media</h1>

    <table class="table">

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
                {{--  <th>Email</th>  --}}
            </tr>
        </thead>

        <tbody>
            @if($photos)
                <?php $i = 1 ?>
                @foreach($photos as $photo)
                    <tr>
                        <td>{{ $i }}</td>
                        <td><img height="50" width="50" src="{{ $photo->file ? $photo->file : '/images/noimage.jpg' }}" alt=""></td>
                        <td>{{ $photo->created_at ? $photo->created_at->diffForHumans() : 'no date' }}</td>
                        <td>

                            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminMediaController@destroy', $photo->id]]) !!}

                                {!! Form::submit('X', ['class' => 'btn btn-danger col-sm-6']) !!}

                            {!! FOrm::close() !!}

                        </td>
                    </tr>
                <?php $i++ ?>
                @endforeach
            @endif
        </tbody>

        
    </table>

@endsection