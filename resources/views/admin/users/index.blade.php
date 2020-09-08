@extends('./admin')


@section('usersContent')
    @if(Session::has('deleted_user'))
      <div class="alert alert-danger" role="alert">
        {{ session('deleted_user')}}
      </div>

    @endif
<div class="container p-4 bg-light">

    
    <h1>Users</h1>
    
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Created_At</th>
            <th scope="col">Updated_At</th>
          </tr>
        </thead>
          @if($users)
              @foreach ($users as $user)
              <tbody>
                <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->photo ? $user->photo->file : 'No User Photo' }}" alt=""></td>
                <td><a href="{{url("/users/$user->id/edit")}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active==1?'Active':'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
              </tbody>
              
              @endforeach
            @endif
          </table>
      
        </div>
    
@endsection
