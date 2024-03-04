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
                                    <h3>Halaman Supplier</h3>
                                    <a href="/supplier/tambah" class="btn btn-primary">Tambah Data </a>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Nama Supplier</th>
                                                <th scope="col">Nama Perusahaan</th>
                                                <th scope="col">No Telepon</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($supplier as $s)
                                            <tr class="">
                                                <td scope="row">{{$s->id}}</td>
                                                <td>{{$s->nama_supplier}}</td>
                                                <td>{{$s->nama_perusahaan}}</td>
                                                <td>{{$s->no_tlp}}</td>
                                                <td>{{$s->alamat}}</td>
                                                <td>
                                                    <a href="/supplier/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/supplier/{{$s->id}}/hapus" class="btn btn-danger" onclick="return confirm('yakin?')">Hapus</a>
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