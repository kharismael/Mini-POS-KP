@extends('layout.main')

@section('title', 'Home')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">Create New Account</div>
                <div class="card-body">
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="m-4">
                            <label for="email" class="from-label">Email</label>
                            <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control">
                            @error('email')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="m-4">
                            <label for="username" class="from-label">Username</label>
                            <input type="text" value="{{ old('username') }}" name="username" id="username" class="form-control">
                            @error('username')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="m-4">
                            <label for="name" class="from-label">Real Name</label>
                            <input type="text" value="{{ old('name') }}" name="name" id="name" class="form-control">
                            @error('name')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="m-4">
                            <label for="password" class="from-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password')
                                <div class="text-danger mt-2">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection