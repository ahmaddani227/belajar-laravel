@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <main class="form-registration w-100 m-auto mt-5">
                            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                            
                            <form action="/register" method="POST">

                                @csrf

                                <div class="form-floating">
                                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}" />
                                    <label for="name">Name</label>
                                    @error('name')
                                        <div id="name" class="invalid-feedback">
                                           {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}" />
                                    <label for="username">Username</label>
                                    @error('username')
                                        <div id="username" class="invalid-feedback">
                                           {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}" />
                                    <label for="email">Email address</label>
                                    @error('email')
                                        <div id="email" class="invalid-feedback">
                                           {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="password" required placeholder="Password" />
                                    <label for="password">Password</label>
                                    @error('password')
                                        <div id="password" class="invalid-feedback">
                                           {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                    
                                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">
                                    Register
                                </button>
                            </form>
        
                            <small class="d-block text-center mt-3">Already Registered ? <a href="/login">Login</a></small>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection