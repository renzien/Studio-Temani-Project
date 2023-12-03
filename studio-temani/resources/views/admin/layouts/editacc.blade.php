@extends('admin.account')
@section('title', 'Edit Account')
@section('editaccount')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Profile</h3>
                    <p class="text-subtitle text-muted">Halaman untuk mengubah Data Profile</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Halaman Utama</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="avatar avatar-xl">
                                    <img src="assets/img/avatar/2.jpg" alt="Avatar">
                                </div>

                                <h3 class="mt-3">{{ auth()->user()->name }}</h3>
                                <p class="text-small">Junior Software Engineer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Isi Namamu">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="form-label">Telpon</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Your Phone">
                                </div>
                                <div class="form-group">
                                    <label for="birthday" class="form-label">Ulang Tahun</label>
                                    <input type="date" name="birthday" id="birthday" class="form-control"
                                        placeholder="Your Birthday">
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="form-label">Jenis Kelamin</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="male">Laki - Laki</option>
                                        <option value="female">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
