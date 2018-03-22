@extends('layouts.admin')


@section('content')


    <div class="col-sm-6">

        <h1>Categeory</h1>

        {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Add New Category') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}

        </div>
    

        {!! Form::close() !!}

        @include('includes.form_errors')

    </div>

    <div class="col-sm-6">
        <br><br><br><br>


        <table class="table">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created At</th>
                    {{--  <th>Update At</th>  --}}
                </tr>
            </thead>

            <tbody>

                @if($categories)
                
                    <?php $i = 1; ?>
                    @foreach($categories as $category)

                        <tr>
                            
                            <td><?php echo $i; ?></td>
                            <td><a href="{{ route('admin.categories.edit', $category->id) }}">{{ $category->name }}</a></td>
                            <td>{{ $category->created_at->diffForHumans() }}</td>
                            {{--  <td>{{ $category->updated_at->diffForHumans() }}</td>  --}}

                        </tr>
                    
                        <?php $i++; ?>
                    @endforeach

                @endif

            </tbody>

        </table>
    
    </div>

@endsection