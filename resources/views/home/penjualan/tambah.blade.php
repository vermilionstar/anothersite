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
                                <form action="/penjualan/simpan" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Petugas</label>
                                    <select name="id_user" id="" class="form-control">
                                        @foreach ($user as $u)
                                            <option value="{{$u->id}}">{{$u->nama_petugas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Member</label>
                                    <select name="id_member" id="" class="form-control">
                                        @foreach ($member as $m)
                                            <option value="{{$m->id}}">{{$m->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Sepatu</label>
                                    <select name="id_sepatu" id="" class="form-control">
                                        @foreach ($sepatu as $s)
                                            <option value="{{$s->id}}">{{$s->nama_sepatu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Tanggal Bayar</label>
                                    <input type="date" name="tgl_bayar" class="form-control" placeholder="Masukan Tanggal Bayar" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Jumlah Bayar</label>
                                    <input type="text" name="jumlah_bayar" class="form-control" placeholder="Masukan Jumlah Bayar" required>
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