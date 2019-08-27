@extends('library.home')
@section('contant')

<form action="" method="post" role="form">
    {{csrf_field()}}
    <legend>Login</legend>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Input...">
    </div>


    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password" id="password" placeholder="Input...">
    </div>

    <button type="submit" class="btn btn-primary">Login</button>



@endsection