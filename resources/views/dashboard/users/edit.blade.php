@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Password</h1>
    </div>

    @if(session()->has('PasswError'))
        <div class="alert alert-danger col-lg-6" role="alert"> <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
            {{ session('PasswError') }} 
        </div>
    @endif

    @if(session()->has('sukses'))
    <div class="alert alert-success col-lg-6" role="alert"> <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> 
        {{ session('sukses') }} 
    </div>
    @endif

    <div class="col-lg-8">
        <form method="post" action="{{ url('') }}/dashboard/passw/{{ auth()->user()->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username', $users->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_lama" class="form-label">Password Lama</label>
                <input type="password" class="form-control @error('password_lama') is-invalid @enderror" id="password_lama" name="password_lama" required value="{{ old('password_lama') }}">
                @error('password_lama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_baru" class="form-label">Password Baru</label>
                <input type="password" class="form-control @error('password_baru') is-invalid @enderror" id="password_baru" name="password_baru" required value="{{ old('password_baru') }}">
                @error('password_baru')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ulangi_password_baru" class="form-label">Ulangi Password</label>
                <input type="password" class="form-control @error('ulangi_password_baru') is-invalid @enderror" id="ulangi_password_baru" name="ulangi_password_baru" required value="{{ old('ulangi_password_baru') }}">
                @error('ulangi_password_baru')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>

@endsection