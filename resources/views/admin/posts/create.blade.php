@extends('admin')

@section('content')

    <div class="container bg-light p-4">
        <h1>Create Posts</h1>

        {!! Form::open(['method' => 'POST', 'route' => 'posts.store', 'class' => 'form-horizontal' , 'files'=> true]) !!}
            

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                <small class="text-danger">{{ $errors->first('title') }}</small>
            </div>
            
            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', [1=>'PHP' , 2=>'Javascript'], null, ['id' => 'category_id', 'class' => 'form-control']) !!}
                <small class="text-danger">{{ $errors->first('category_id') }}</small>
            </div>
            
            <div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
                {!! Form::label('photo_id', 'Photo : ') !!}
                {!! Form::file('photo_id', ['required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('photo_id') }}</small>
               
            </div>

            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                {!! Form::label('body', 'Description :') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control', 'rows'=> 5 ,  'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('body') }}</small>
            </div>
            
            
            <div class="btn-group pull-right">
                {!! Form::submit('Create Post ', ['class' => 'btn btn-outline-success']) !!}
            </div>
            
        {!! Form::close() !!}

    </div>
    
@endsection