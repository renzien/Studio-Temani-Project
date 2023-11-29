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
                </div>
            </div>
        </section>
    </div>
@endsection
