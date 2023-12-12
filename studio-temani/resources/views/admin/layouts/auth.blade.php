@extends('admin.login')
@section('title', 'Login')
@section('login')
    <div class="login">
        <img src="assets/img/bg-hero.png" alt="Studio Temani" class="login__img">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('process') }}" class="login__form" method="POST">
            @csrf
            <h1 class="login__title">Masuk Akun</h1>
            <div class="login__content">
                <div class="login__box">
                    <i class="ri-user-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="email" required class="login__input @error('email') is-invalid @enderror"
                            placeholder=" " name="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="" class="login__label">Email</label>
                    </div>
                </div>
                <div class="login__box">
                    <i class="ri-lock-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="password" required class="login__input" id="login-pass" placeholder=" "
                            name="password">
                        <label for="" class="login__label">Password</label>
                        <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                    </div>
                </div>
            </div>

            <div class="login__check">
                <div class="login__check-group">
                    <input type="checkbox" class="login__check-input">
                    <label for="" class="login__check-label">Ingat Saya</label>
                </div>
            </div>
            <button class="login__button">Login</button>
            <p class="login__register">
                Belum punya akun ? <a href="/register">Daftar Disini</a>
            </p>
        </form>
    </div>
@endsection
