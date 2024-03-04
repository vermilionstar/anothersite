@extends('layouts.master')
@section('title','Sepatu')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h3>Halaman Sepatu</h3>
                                    <a href="/sepatu/tambah" class="btn btn-primary">Tambah Data </a>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Nama Sepatu</th>
                                                <th scope="col">Merk</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Warna</th>
                                                <th scope="col">Supplier</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sepatu as $s)
                                            <tr class="">
                                                <td scope="row">{{$s->id}}</td>
                                                <td>{{$s->nama_sepatu}}</td>
                                                <td>{{$s->merk}}</td>
                                                <td>{{$s->stok}}</td>
                                                <td>{{$s->warna}}</td>
                                                <td>{{$s->supplier->nama_supplier}} from {{$s->supplier->nama_perusahaan}}</td>
                                                <td>
                                                    <a href="/sepatu/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/sepatu/{{$s->id}}/hapus" class="btn btn-danger" onclick="return confirm('yakin?')">Hapus</a>
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