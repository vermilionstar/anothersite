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
                                <form action="/sepatu/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Sepatu</label>
                                    <input type="text" name="nama_sepatu" class="form-control" placeholder="Masukan Nama Sepatu" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Merk</label>
                                    <input type="text" name="merk" class="form-control" placeholder="Masukan Merk" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Stok</label>
                                    <input type="text" name="stok" class="form-control" placeholder="Masukan Stok" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Warna</label>
                                    <input type="color" name="warna" class="form-control" placeholder="Masukan Warna" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Supplier</label>
                                    <select name="id_supplier" id="" class="form-control">
                                        @foreach ($supplier as $s)
                                            <option value="{{$s->id}}">{{$s->nama_supplier}}</option>
                                        @endforeach
                                    </select>
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