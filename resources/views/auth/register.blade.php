@extends('layouts.app')

@section('title')
    BIT FRONT STAKE
@endsection

@section('content')
    <!-- Begin page -->
    <div class="accountbg"
         style="background: url('{{ asset('/images/bg-2.jpg') }}');background-size: cover;background-position: center;"></div>

    <div class="wrapper-page account-page-full">

        <div class="card shadow-none">
            <div class="card-block">

                <div class="account-box">

                    <div class="card-box shadow-none p-4">
                        <div class="p-2">
                            <div class="text-center mt-4">
                                <a href="/"><img src="{{ asset('/logo/bfs-full.png') }}" height="50" alt="logo"></a>
                            </div>

                            <h4 class="font-size-18 mt-5 text-center">Free Register</h4>
                            <p class="text-muted text-center">Get your free Bit Front Stake account now.</p>

                            <form class="mt-4" action="register" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" name="username" required class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter username">
                                    @error('username')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" name="name" required class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name">
                                    @error('name')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="useremail">Email</label>
                                    <input type="email" name="email" required class="form-control @error('useremail') is-invalid @enderror" id="useremail" placeholder="Enter email">
                                    @error('useremail')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" name="password" required class="form-control @error('password') is-invalid @enderror " id="userpassword"
                                           placeholder="Enter password">
                                    @error('password')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="confirmuserpassword">Confirm Password</label>
                                    <input type="password" required name="password_confirmation" class="form-control" id="confirmuserpassword"
                                           placeholder="Confirm password">
                                </div>

                                <div class="mb-3">
                                    <div class="text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                            Register
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-2 mb-0 row">
                                    <div class="col-12 mt-3">
                                        <p class="font-size-14 text-muted mb-0">By registering you agree to the Bitfrontstake
                                            <a href="#">Terms of Use</a></p>
                                    </div>
                                </div>
                            </form>

                            <div class="mt-5 pt-4 text-center position-relative">
                                <p>Already have an account ? <a href="{{ route('login') }}"
                                                                class="fw-medium text-primary"> Login </a></p>
                                <p>
                                    <script>document.write(new Date().getFullYear())</script>
                                    © <span class="text-italic">Bitfrontstake</span>. Crafted with <i class="mdi mdi-heart text-danger"></i>
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
