@extends('layout')

@section('content')
    <div class="container">
        <form method="POST" action="form">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}" placeholder="Enter email">
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
@endsection
