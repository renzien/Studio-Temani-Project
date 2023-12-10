@extends('admin.priceadmin')
@section('title', 'Pricelist')
@section('priceeditor')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Pricelist Posting</h3>
                    <p class="text-subtitle text-muted">
                        Gunakan posting editor ini untuk melakukan editing
                        info tentang pricelist yang telah disediakan.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Pricelist
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
                            <h4 class="card-title">Edit Tentang Pricelist</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('editPricelistHome', $pricelisthomes->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="form-label">Title Header</label>
                                    <input type="text" name="title" id="name" class="form-control"
                                        placeholder="Isi Title">
                                </div>
                                <div class="form-group">
                                    <textarea name="desc" id="default" cols="30" rows="10"></textarea>
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
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Edit Inquiry Info</h3>
            <p class="text-subtitle text-muted">
                Gunakan posting editor ini untuk melakukan editing
                info tentang inquiry yang telah disediakan.
            </p>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Tentang Inquiry</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('editInquiry', $inquirys->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="form-label">Title Header</label>
                                    <input type="text" name="title" id="name" class="form-control"
                                        placeholder="Isi Title">
                                </div>
                                <div class="form-group">
                                    <textarea name="desc" id="default" cols="30" rows="10"></textarea>
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
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Edit Pricelist Category</h3>
            <p class="text-subtitle text-muted">
                Gunakan posting editor ini untuk melakukan editing
                info tentang pricelist yang telah disediakan.
            </p>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Judul Pricelist</h4>
                        </div>
                        <div class="card-body">
                            <textarea name="" id="default" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Isi Text Pricelist</h4>
                        </div>
                        <div class="card-body">
                            <textarea name="" id="default" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Upload Foto</h3>
            <p class="text-subtitle text-muted">
                Silahkan masukan foto dengan rename sesuai dengan yang dibutuhkan.
            </p>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Multiple Foto Uploader</h5>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">
                                    <b>Format: </b> <br>
                                    <b>1. </b> Foto Home: <b>hero.jpg/.png</b> <br>
                                    <b>2. </b> Foto About: <b>about.jpg/.png</b> <br>
                                    <b>3. </b> Foto Pricelist: <b>pricelist.jpg/.png</b> <br>
                                </p>
                                <!-- File uploader with multiple files upload -->
                                <input type="file" class="multiple-files-filepond" multiple />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
