<div id="auth">
    <div class="row h-100">
      <div class="col-lg-5 col-12">
        <div id="auth-left">
          <div class="auth-logo">
            <a href="/admin"
              ><img src="assets/img/svg/studio-logo.svg" alt="Logo"
            /></a>
          </div>
          <h1 class="auth-title">Daftar</h1>
          <p class="auth-subtitle mb-5">
            Masukkan data sesuai yang tertera di form.
          </p>

          <form action="/admin">
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="text"
                class="form-control form-control-xl"
                placeholder="Email"
              />
              <div class="form-control-icon">
                <i class="ri-mail-line"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="text"
                class="form-control form-control-xl"
                placeholder="Username"
              />
              <div class="form-control-icon">
                <i class="ri-user-line"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="password"
                class="form-control form-control-xl"
                placeholder="Password"
              />
              <div class="form-control-icon">
                <i class="ri-lock-line"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input
                type="password"
                class="form-control form-control-xl"
                placeholder="Confirm Password"
              />
              <div class="form-control-icon">
                <i class="ri-lock-line"></i>    
              </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
              Daftar
            </button>
          </form>
          <div class="text-center mt-5 text-lg fs-4">
            <p class="text-gray-600">
              Sudah punya akun ?
              <a href="/login" class="font-bold">Masuk</a>.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right"></div>
      </div>
    </div>
  </div>