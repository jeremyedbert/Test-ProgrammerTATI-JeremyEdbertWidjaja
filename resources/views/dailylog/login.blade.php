@extends('layouts.main')
@section('content')
    <h3>Login</h3>
    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <div class="flex-col items-center" style="max-width: 800px">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        @if (session()->has('login_error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('login_error') }}
            </div>
        @endif
        <button type="submit" class="btn btn-primary mb-3">Login</button>
    </form>
@endsection
