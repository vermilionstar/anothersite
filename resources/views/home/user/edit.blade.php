@extends('layouts.master')
@section('title','Halaman Edit Data')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center>
                                <h4>Halaman Edit Data</h4>
                            </center>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{$user->id}}/update" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Nama Petugas</label>
                                <input type="text" name="nama_petugas" value="{{$user->nama_petugas}}" class="form-control" placeholder="Masukan Nama Petugas" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Username</label>
                                <input type="text" name="username" value="{{$user->username}}" class="form-control" placeholder="Masukan Username" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Password</label>
                                <input type="password" name="password" value="{{$user->password}}" class="form-control" placeholder="Masukan Password" required>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Level</label>
                                <select name="level" id="level" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="Petugas">Petugas</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/user" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection