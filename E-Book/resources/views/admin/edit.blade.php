@extends('admin.sidebar')

@section('admin')

<div class="container text-center">
        <h1 class="mt-3 mb-2 ">Edit user</h1>

                    <form action="{{route('updated',$data->id)}}" method="post">
                        @csrf

                  <div class="row">
                    <div class="col-md-8 offset-2">
 <input type="text"placholder="ENTER NAME" name="username" class="form-control mt-3" value="{{$data->name}}">
                    @error('usermail')
                    <p class="text-danger">{{$message}}</p>
                    @enderror()
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-md-8 offset-2">
<input type="text"placholder="ENTER MAIL" name="usermail" class="form-control mt-3" value="{{$data->email}}">
                    @error('usermail')
                    <p class="text-danger">{{$message}}</p>
                    @enderror()
                    </div>
                  </div>

              <div class="row mt-3">
                <div class="col-md-8 offset-2">
                          <input type="password" placholder="ENTER PASSWORD" name="password" class="form-control mt-3" value="{{$data->password}}">
             @error('userpass')
                    <p class="text-danger">{{$message}}</p>
                    @enderror()
                </div>
              </div>

<div class="row mt-3">
    <div class="col-md-8 offset-2">

<select name="role" class="form-select" required>
       <option value="admin" {{ $data->role == 'admin' ? 'selected' : '' }}>
        Admin
    </option>

    <option value="user" {{ $data->role == 'user' ? 'selected' : '' }}>
        User
    </option>

    <option value="author" {{ $data->role == 'author' ? 'selected' : '' }}>
        Author
    </option>
</select>

    </div>
</div>

                    <button class="btn btn-primary mt-3" href="#">confirm to update</button>
        </form>


            </div>


@endsection


