@extends('admin')


@section('content')

<div class="container bg-light">

<h2>Media</h2>

@if($photos)
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Created</th>
      </tr>
    </thead>

    @foreach ($photos as $photo)
        
        <tbody>
            <tr>
            <th scope="row">{{ $photo->id}}</th>
                <td><img height="50" src="{{$photo->file}}" alt=""></td>
                <td>{{ $photo->created_at ? $photo->created_at->diffForHumans() : 'No Date'}}</td>
                <td>
                    
                    {!! Form::open(['method' => 'DELETE', 'route' => ['media.destroy', $photo->id], 'class' => 'form-horizontal dropzone']) !!}
                    
                       {!! Form::submit('Remove',  ['class' => 'btn btn-outline-danger pull-right']) !!}

           
                    {!! Form::close() !!}



                </td>
            </tr>
        </tbody>
    @endforeach
  </table>
 @endif 
 
</div>

@endsection