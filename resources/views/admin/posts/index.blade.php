
@extends('admin')

@section('content')

    <div class="container bg-light p-4">
        <h1>Posts</h1>

        <table class="table table-dark">
            <thead>
              <tr>
                  <th scope="col">Post ID</th>
                  <th scope="col">Photo</th>
                <th scope="col">Owner</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Created_At</th>
                <th scope="col">Updated_At</th>
               
              </tr>
            </thead>
              @if($posts)
                  @foreach ($posts as $post)
                  <tbody>
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><img height="50" src="{{$post->photo ? $post->photo->file : 'No User Photo' }}" alt=""></td>
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->category_id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                        </tr>
                    </tbody>
                        
                        
                  
                  @endforeach
                @endif
              </table>



    </div>
    
@endsection