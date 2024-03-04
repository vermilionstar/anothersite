@extends('layouts.master')
@section('title','Halaman Tambah Data')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h4>Halaman Tambah Data</h4>
                                </center>
                            </div>
                            <div class="card-body">
                                <form action="/supplier/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Supplier</label>
                                    <input type="text" name="nama_supplier" class="form-control" placeholder="Masukan Nama Supplier" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Perusahaan</label>
                                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="Masukan Nama Supplier" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">No Telepon</label>
                                    <input type="text" name="no_tlp" class="form-control" placeholder="Masukan No Telepon" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Batal</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection