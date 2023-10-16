@extends('base')

@section('title','Register')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class=" text-center text-muted mt-2 mb-3">Register</h1>
                <p class="mb-3 text-center text-muted ">Create an account for to visit our catalogue</p>

                <form action="{{ route('register') }}" method="POST" class="row g-3" id="form" >
                @csrf

                <div class="col">
                    <label for="firstname" class="text-muted form-label">First Name</label>
                    <input type="text" class="form-control "  name="firstname" id="firstname" value="{{ old('firstname') }}" autofocus autocomplete="firstname" required>
                    <small class=" text-danger fw-bold" id="error_firstname"></small>
                </div>
                <div class="col">
                    <label for="Last name" class=" text-muted form-label">Last Name</label>
                    <input type="text" class="form-control "   name="lastname" id="lastname" value="{{ old('lastname') }}" autocomplete="lastname" autofocus required>
                    <small class=" text-danger fw-bold" id="error_lastname"></small>
                </div>

                <div class="col-12" id="email-verification-result">
                    <label for="email" class=" text-muted form-label">Email</label>
                    <input type="email" class="form-control "   name="email" id="email" value="{{ old('email') }}" autocomplete="email" autofocus required url-existemail="{{ route('email.verify') }}" token="{{ csrf_token() }}" >
                    <small class=" text-danger fw-bold" id="error_email">@error('email'){{ $message }}@enderror</small>
                </div>

                <div class="col">
                    <label for="password" class=" text-muted form-label">Password</label>
                    <input type="password" class="form-control "   name="password" id="password" autocomplete="password" autofocus required>
                    <small class=" text-danger fw-bold" id="error_password"></small>
                </div>

                <div class="col">
                    <label for="password_confirm" class=" text-muted form-label">Confirm Password</label>
                    <input type="password" class="form-control "   name="password_confirm" id="password_confirm" autocomplete="password_confirm" autofocus required>
                    <small class=" text-danger fw-bold" id="error_password_confirm"></small>
                </div>

                <button type="submit" class="btn btn-primary" id="sign">Sing in</button>
                <p class="text-center mt-4">Have you an account? <a href="{{ route('login') }}">Login</a></p>
                </form>
            </div>
        </div>


    </div>

@endsection
