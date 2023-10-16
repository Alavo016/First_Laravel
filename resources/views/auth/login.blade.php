
@extends('base')

@section('title','Login')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 class="text-center text-muted mb-3 mt-2">Please subscribe you </h1>
            <p class="text-center text-muted " >
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, soluta.
            </p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                    @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror

                    @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="email" class="mt-3"><i class="fas fa-envelope"></i> Email</label>
                    <input type="email" name="email" id="email" class=" form-control @error('email')
                        is-invalid
                    @enderror" required value="{{ old('email') }}" autocomplete="email" autofocus>
                    <label for="password" class="mt-2">Password</label>
                    <input type="password" name="password" id="password" class=" form-control @error('password')
                        is-invalid
                    @enderror " required autocomplete="current-password" >

                    <div class="row mt-2 mb-5 "  >
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input " type="checkbox" role="switch" id="remenber" name="remenber" {{ old('remenber') ? checked : '' }}>
                                <label class="form-check-label" for="remenber">Remenber me</label>
                              </div>
                        </div>  

                        <div class="col-md-6 text-end">
                            <a href="#">Forget password ?</a>
                        </div>
                    </div>

                    <button class="btn btn-primary col-12 " type="submit" >Login </button>

                    <p class="text-center mt-4">Not registered yrt <a href="{{ route('register') }}">Create an account</a></p>
            </form>
        </div>
    </div>
</div>
@endsection

