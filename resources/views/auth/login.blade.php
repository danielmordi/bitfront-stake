@extends('layouts.app')

@section('title')
    BITFRONTSTAKE
@endsection

@section('content')
    <!-- Begin page -->
    <div class="accountbg"
         style="background: url({{ asset('images/bg-2.jpg') }});background-size: cover;background-position: center;">
    </div>

    <div class="wrapper-page account-page-full">

        <div class="card shadow-none">
            <div class="card-block">

                <div class="account-box">

                    <div class="card-box shadow-none p-4">
                        <div class="p-2">
                            <div class="text-center mt-4">
                                <a href="/"><img src="{{ asset('/images/bfs-logo.png') }}" height="50" alt="logo"></a>
                            </div>

                            <h4 class="font-size-18 mt-5 text-center">Welcome Back !</h4>
                            <p class="text-muted text-center">Sign in to continue to BitFrontStake.</p>

                            <form class="mt-4" action="login" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="email">Username</label>
                                    <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="userpassword"
                                           placeholder="Enter password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" value=""
                                                   id="customControlInline">
                                            <label class="form-check-label" for="customControlInline">Remember
                                                me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log
                                            In
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-2 mb-0 row">
                                    <div class="col-12 mt-3">
                                        <a href="pages-recoverpw-2.html" class="text-muted"><i class="mdi mdi-lock"></i>
                                            Forgot your password?</a>
                                    </div>
                                </div>
                            </form>

                            <div class="mt-5 pt-4 text-center position-relative">
                                <p>Don't have an account ? <a href="{{ route('register') }}"
                                                              class="fw-medium text-primary"> Signup now </a></p>
                                <p>
                                    <script>document.write(new Date().getFullYear())</script>
                                    © Bitfrontstake. Crafted with <i class="mdi mdi-heart text-danger"></i>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    @include('includes.script')
@endsection
