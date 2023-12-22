@extends('admin.creative')
@section('title', 'Creative Studio')
@section('creativestudio')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Creative Studio</h3>
                    <p class="text-subtitle text-muted">
                        Silahkan edit foto yang ada pada halaman Creative Studio.
                        Gunakan editor ini untuk melakukan edit pada halaman Creative Studio yang telah disediakan.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Creative Studio
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <form action="{{ route('editCreaSpace', $creaspaces->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" class="form-label">Judul Paket</label>
                                <input type="text" name="title" id="name" class="form-control"
                                    placeholder="Judul Paket">
                            </div>
                            <div class="form-group">
                                <textarea name="descpack" id="default" cols="30" rows="10" placeholder="Masukkan Penjelasan Package"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-12 col-md-6 order-md-1 mt-5 order-last">
            <h3>Upload Foto</h3>
            <p class="text-subtitle text-muted">
                Silahkan masukan foto untuk contoh Creative Studio
            </p>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Image Preview</h5>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- File uploader with image preview -->
                                <input type="file" class="image-preview-filepond" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
