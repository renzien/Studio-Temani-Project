@extends('admin.login')
@section('title', 'Login')
@section('login')
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/admin"><img src="assets/img/svg/studio-logo.svg" alt="Logo" /></a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h1 class="auth-title">Masuk</h1>
                    <p class="auth-subtitle mb-5">
                        Silahkan login menggunakan akun yang sudah terdaftar.
                    </p>

                    <form action="{{ route('process') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl @error('email') is-invalid @enderror" placeholder="Email" name="email"
                                required />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    
                                @enderror
                            <div class="form-control-icon">
                                <i class="ri-user-line"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password"
                                name="password" required />
                            <div class="form-control-icon">
                                <i class="ri-lock-2-line"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Tetap Login
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                            Log in
                        </button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">
                            Belum punya akun ?
                            <a href="/register" class="font-bold">Daftar Disini</a>.
                        </p>
                        <p>
                            <a class="font-bold" href="/forgot">Lupa Password ?</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
@endsection
