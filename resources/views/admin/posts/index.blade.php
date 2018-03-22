@extends('layouts.admin')


@section('content')

    <h1>User Posts</h1>

    <table class="table">

        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>

        <tbody>

            @if($posts)

                @foreach($posts as $post)

                    <tr>
                        
                        <td>{{ $post->id }}</td>
                        <td><img height="50" width="50" src="{{ $post->photo ? $post->photo->file : '/images/noimage.jpg' }}" alt=""></td>
                        <td><a href="{{ route('admin.posts.edit', $post->id) }}"> {{ $post->user->name }} </a></td>
                        <td>{{ $post->category ? $post->category->name : 'uncategorized' }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>{{ $post->updated_at->diffForHumans() }}</td>

                    </tr>

                @endforeach

            @endif

        </tbody>

    </table>
        
        

@endsection