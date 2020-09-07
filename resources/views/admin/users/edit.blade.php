


@extends('admin')


@section('content')

<div class="row">
    <div class="col-sm-3">
        <img height="150" src="{{$user->photo ? $user->photo->file : 'No photo' }}" alt="" class="img-responsive rounded ">
         
    </div>
    
    
    
    <div class="col-sm-9">
        
        <div class="container bg-light">
            
            <h3>Edit Users</h3>

             {!! Form::model($user ,  ['method' => 'PATCH','action'=>['AdminUsersController@update' , $user->id] ,'files'=>true,'class' => 'form-horizontal']) !!}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email', 'Email address') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
            
                <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id',  $roles, null, [ 'class' => 'form-control']) !!}                 
                    <small class="text-danger">{{ $errors->first('role_id') }}</small>
                </div>

                {{-- [''=>'Choose Option'] + --}}

                <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
                    {!! Form::label('is_active', 'Status') !!}
                    {!! Form::select('is_active', array(1=>'Active' ,0=>'Not Active' ), null, ['id' => 'is_active', 'class' => 'form-control', 'required' => 'required',]) !!}
                    <small class="text-danger">{{ $errors->first('is_active') }}</small>
                </div>

                <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                    {!! Form::label('photo_id', 'Photo :') !!}
                    {!! Form::file('photo_id',null) !!}
                    <small class="text-danger">{{ $errors->first('file') }}</small>
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                
                <div class="btn-group pull-right">
                    {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                </div>
                    
            {!! Form::close() !!} 
        </div>

    </div>

</div>
        @endsection
     
     
     
     
     
     
     
    