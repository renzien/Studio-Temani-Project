@extends('admin.studioadmin')
@section('title', 'Studio Admin')
@section('studioadmin')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Judul Studio Posting</h3>
                    <p class="text-subtitle text-muted">
                        Gunakan posting editor ini untuk melakukan editing
                        info judul studio yang telah disediakan.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Studio
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
                            <h4 class="card-title">Edit Judul Studio</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('editHomeStudio', $homestudios->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="form-label">Title Header</label>
                                    <input type="text" name="title" id="name" class="form-control"
                                        placeholder="Isi Title">
                                </div>
                                <div class="form-group">
                                    <textarea name="tagline" id="default" cols="30" rows="10" placeholder="Isi Tagline"></textarea>
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
            <h3>Edit Studio Equipment List</h3>
            <p class="text-subtitle text-muted">
                Gunakan posting editor ini untuk melakukan editing
                info tentang Studio Equipment yang telah disediakan.
            </p>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Judul Studio</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('editStudioEquip', $studioequips->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="form-label">Title Header</label>
                                    <input type="text" name="title" id="name" class="form-control"
                                        placeholder="Isi Title">
                                </div>
                                <div class="form-group">
                                    <textarea name="tagline" id="default" cols="30" rows="10" placeholder="Isi Tagline"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">List 1 Text</label>
                                    <input type="text" name="list1" id="name" class="form-control"
                                        placeholder="Isi Title">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">List 2 Text</label>
                                    <input type="text" name="list2" id="name" class="form-control"
                                        placeholder="Isi Title">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">List 3 Text</label>
                                    <input type="text" name="list3" id="name" class="form-control"
                                        placeholder="Isi Title">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">List 4 Text</label>
                                    <input type="text" name="list4" id="name" class="form-control"
                                        placeholder="Isi Title">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">List 5 Text</label>
                                    <input type="text" name="list5" id="name" class="form-control"
                                        placeholder="Isi Title">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-label">List 6 Text</label>
                                    <input type="text" name="list6" id="name" class="form-control"
                                        placeholder="Isi Title">
                                </div>
                                <div class="form-group">
                                    <textarea name="desc" id="default" cols="30" rows="10" placeholder="Isi Deskripsi Tentang List Diatas"></textarea>
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
            <h3>Edit Quotes Studio</h3>
            <p class="text-subtitle text-muted">
                Gunakan posting editor ini untuk menambahkan atau
                mengedit quotes yang akan ditampilkan pada halaman
            </p>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Quotes Studio</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('editQuote', $quotes->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="form-label">Author Name</label>
                                    <input type="text" name="author" id="name" class="form-control"
                                        placeholder="Nama Author">
                                </div>
                                <div class="form-group">
                                    <textarea name="quote" id="default" cols="30" rows="10" placeholder="Masukkan Quotes"></textarea>
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
            <h3>Edit Packages Info</h3>
            <p class="text-subtitle text-muted">
                Gunakan posting editor ini untuk menambahkan atau
                mengedit packages yang akan ditampilkan pada halaman
            </p>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Package Info</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('editPackage', $packages->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="form-label">Title Header</label>
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
