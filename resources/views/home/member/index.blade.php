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
                                    <h3>Halaman Member</h3>
                                    <a href="/member/tambah" class="btn btn-primary">Tambah Data </a>
                                </center>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-stripped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO/ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No Telepon</th>
                                                <th scope="col">Tanggal Dibuat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($member as $m)
                                            <tr class="">
                                                <td scope="row">{{$m->id}}</td>
                                                <td>{{$m->nama}}</td>
                                                <td>{{$m->alamat}}</td>
                                                <td>{{$m->no_tlp}}</td>
                                                <td>{{$m->created_at}}</td>
                                                <td>
                                                    <a href="/member/{{$m->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/member/{{$m->id}}/hapus" class="btn btn-danger" onclick="return confirm('yakin?')">Hapus</a>
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