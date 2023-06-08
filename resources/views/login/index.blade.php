@extends('layouts.main')


@section('container')
    <section class="send_message_section_login">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="send_message_form_box_content">

                    <div class="row justify-content-center">
                        <div class="col-md-4">

                            @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                                </div>
                            @endif

                            @if(session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                                </div>
                            @endif

                            <main class="form-signin">
                                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                                <form action="{{ url('/login') }}" method="POST">    
                                    @csrf   
                                <div class="form-floating">
                                    <label for="floatingInput">Username</label>
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <label for="floatingPassword">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                        
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                                </form>
                                <small class="d-block text-center mt-3">Not registered ? <a href="{{ url('/register') }}">Register now !</a></small>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection