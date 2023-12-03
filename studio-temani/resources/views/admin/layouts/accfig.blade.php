@extends('admin.configacc')
@section('title', 'Konfigurasi Akun')
@section('configacc')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Konfigurasi Akun</h3>
                <p class="text-subtitle text-muted">Halaman untuk melakukan konfigurasi akun</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Halaman Utama</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Konfigurasi Akun</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Ubah Password</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" method="get">
                            <div class="form-group my-2">
                                <label for="current_password" class="form-label">Password Lama</label>
                                <input type="password" name="current_password" id="current_password" class="form-control" placeholder="Masukkan Password Lama" value="">
                            </div>
                            <div class="form-group my-2">
                                <label for="password" class="form-label">Password Baru</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Baru" value="">
                            </div>
                            <div class="form-group my-2">
                                <label for="confirm_password" class="form-label">Konfirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Konfirmasi Password" value="">
                            </div>

                            <div class="form-group my-2 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Hapus Akun</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" method="get">
                            <p>Akun anda akan hilang secara permanen, jika siap tekan checkbox dibawah !</p>
                            <div class="form-check">
                                <div class="checkbox">
                                    <input type="checkbox" id="iaggree" class="form-check-input">
                                    <label for="iaggree">Saya setuju akan menghapus akun saya.</label>
                                </div>
                            </div>
                            <div class="form-group my-2 d-flex justify-content-end">
                                <button type="submit" class="btn btn-danger" id="btn-delete-account" disabled="">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection