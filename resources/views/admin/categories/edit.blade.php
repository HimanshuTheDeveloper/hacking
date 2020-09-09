@extends('admin')



@section('content')

<div class="row">

    <div class="col-sm-12 bg-light">
        <h2>Create Categories</h2>
        
        {!! Form::model($category , ['method' => 'PATCH', 'action'=>['AdminCategoriesController@update' , $category->id], 'class' => 'form-horizontal']) !!}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Name : ') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('name') }}</small>
            </div>

            <div class="btn-group pull-right">
            
            {!! Form::submit('Update Categroy', ['class' => 'btn btn-outline-dark']) !!}
            </div>
        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'route' => ['category.destroy',$category->id], 'class' => 'form-horizontal']) !!}

            <div class="btn-group pull-right">
                {!! Form::submit('Delete Category', ['class' => 'btn btn-outline-danger']) !!}
            </div>
        {!! Form::close() !!}


    </div>    

</div>
              
                
    
@endsection