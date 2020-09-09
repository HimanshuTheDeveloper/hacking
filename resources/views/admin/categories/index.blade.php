@extends('admin')



@section('content')

@if(Session::has('deleted_category'))
    <div class="alert alert-danger" role="alert">
        {{ session('deleted_category')}}
    </div>
@endif
<div class="row">


<div class="col-sm-4 bg-primary">
    <h2>Create Categories</h2>
    
    {!! Form::open(['method' => 'POST', 'route' => 'category.store', 'class' => 'form-horizontal']) !!}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('name', 'Name : ') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>

        <div class="btn-group pull-right">
        
        {!! Form::submit('Create Categroy', ['class' => 'btn btn-outline-dark']) !!}
        </div>
    {!! Form::close() !!}


</div>    


<div class="col-sm-8 bg-light">
        <h2>Categories</h2>

        @if($categories)

        <table style="width:100%">
            <tr>
              <th>Id </th>
              <th>Name</th>
              <th>Created</th>
            </tr>
           
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td><a href="{{ url("/category/$category->id/edit")}}">{{ $category->name }}</a></td>
                    <td>{{ $category->created_at ? $category->created_at->diffForHumans() : 'No Date'}}</td>
                </tr>
                    
            @endforeach
        </table>
        @endif
    </div>
            
</div>
              
                
    
@endsection