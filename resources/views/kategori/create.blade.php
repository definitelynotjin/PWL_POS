@extends('layout.app')


@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Daftar Kategori')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Kategori Baru</h3>
                <form method="post" action="../kategori">
                </div>
                    <div class="card-body">
                        <div class="form-group">

                            <label for="kode_kategori">Kode Kategori</label>
                            <input type="text" class="form-control" name="kodeKategori" id="KodeKategori"
                                placeholder="Kode Kategori">
                        </div>
                        <div class="form-group>
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" name="namaKategori" id="NamaKategori"
                                placeholder="Nama Kategori">
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        @endsection

