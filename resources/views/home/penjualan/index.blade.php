@extends('layouts.master')
@section('title','Member')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h3>Halaman Penjualan</h3>
                                    <a href="/penjualan/tambah" class="btn btn-primary">Tambah Data </a>
                                    <a href="/penjualan/cetak" class="btn btn-success" target="_blank"><span class="fa fa-print">Keseluruhan</span></a>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Petugas</th>
                                                <th scope="col">Member</th>
                                                <th scope="col">Sepatu</th>
                                                <th scope="col">Tanggal Bayar</th>
                                                <th scope="col">Jumlah Bayar</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penjualan as $s)
                                            <tr class="">
                                                <td scope="row">{{$s->id}}</td>
                                                <td>{{$s->user->nama_petugas}}</td>
                                                <td>{{$s->member->nama}}</td>
                                                <td>{{$s->sepatu->nama_sepatu}} from {{$s->sepatu->merk}}</td>
                                                <td>{{$s->tgl_bayar}}</td>
                                                <td>{{$s->jumlah_bayar}}</td>
                                                <td>
                                                    <a href="/penjualan/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/penjualan/{{$s->id}}/hapus" class="btn btn-danger" onclick="return confirm('yakin?')">Hapus</a>
                                                    <a href="/penjualan/{{$s->id}}/struk" class="btn btn-success" target="_blank"><span class="fa fa-print">Struk</span></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection