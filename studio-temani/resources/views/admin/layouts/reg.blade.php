@extends('admin.register')
@section('title', 'Register')
@section('register')
    <div class="login">
        <img src="assets/img/bg-update.png" alt="Studio Temani" class="login__img">
        <form action="{{ route('register') }}" class="login__form" method="POST">
            @csrf
            <h1 class="login__title">Daftar Akun</h1>
            <div class="login__content">
                <div class="login__box">
                    <i class="ri-user-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="text" required class="login__input" placeholder=" " name="name">
                        <label for="" class="login__label">Nama</label>
                    </div>
                </div>
                <div class="login__box">
                    <i class="ri-mail-line"></i>
                    <div class="login__box-input">
                        <input type="email" required class="login__input" placeholder=" " name="email">
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
                <div class="login__box">
                    <i class="ri-lock-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="password" required class="login__input" id="login-pass" placeholder=" "
                            name="confirmPassword">
                        <label for="" class="login__label">Confirm Password</label>
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
            <button class="login__button">Register</button>
            <p class="login__register">
                Sudah Punya Akun ? <a href="/login">Login</a>
            </p>
        </form>
    </div>
@endsection
