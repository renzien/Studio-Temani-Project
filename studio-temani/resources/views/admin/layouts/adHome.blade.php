@extends('admin.adminHome')
@section('title', 'Home Editor')
@section('homeeditor')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Home</h3>
                    <p class="text-subtitle text-muted">
                        Gunakan posting editor ini untuk melakukan edit
                        pada halaman Home.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Home
                            </li>
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
                            <h4 class="card-title">Edit Judul</h4>
                        </div>
                        <div class="card-body">
                            <textarea name="" id="default" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Update Hero Background</h5>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">
                                    Masukkan foto dengan ukuran 1920x1080. Agar tampilan lebih baik,
                                    gunakan foto dengan format .png
                                </p>
                                <!-- File uploader with image preview -->
                                <input type="file" class="image-preview-filepond" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Edit About</h3>
            <p class="text-subtitle text-muted">
                Gunakan posting editor ini untuk melakukan
                edit pada halaman About yang telah disediakan.
            </p>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Judul About</h4>
                        </div>
                        <div class="card-body">
                            <textarea name="" id="default" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Isi About</h4>
                        </div>
                        <div class="card-body">
                            <textarea name="" id="default" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Update Hero Background</h5>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">
                                    Masukkan foto dengan ukuran 1920x1080. Agar tampilan lebih baik,
                                    gunakan foto dengan format .png
                                </p>
                                <!-- File uploader with image preview -->
                                <input type="file" class="image-preview-filepond" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
