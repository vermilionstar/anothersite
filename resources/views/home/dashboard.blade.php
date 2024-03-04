@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
  <i class="fas fa-expand-arrows-alt"></i>
</a>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard Penjualan Sepatu</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$jumlah_member}}</h3>

              <p>Jumlah Member</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="/member" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$jumlah_barang}}</h3>

              <p>Jumlah Sepatu</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/sepatu" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>
                Rp.
                @if ($total->total_price == null)
                0
                @else{{$total->total_price}}
                @endif
              </h3>

              <p>Total Penjualan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/penjualan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        {{-- <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}
        <!-- ./col -->
      </div>
  </section>


  <section class="content">
  <div class="row">
      <div class="col-12">
          <div class="card">
            <div class="card-header">
              <center>
                  <h4>History Penjualan</h4>
                  
              </center>
              <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-stripped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">NO/ID</th>
                                <th scope="col">Kasir</th>
                                <th scope="col">Member</th>
                                <th scope="col">Sepatu</th>
                                <th scope="col">Tanggal Bayar</th>
                                <th scope="col">Jumlah Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penjualan as $p)
                            <tr class="">                             
                                <td scope="row">{{$p->id}}</td>
                                <td>{{$p->user->nama_petugas}}</td>
                                <td>{{$p->member->nama}}</td>
                                <td>{{$p->sepatu->merk}} - {{$p->sepatu->nama_sepatu}}</td>
                                <td>{{$p->tgl_bayar}}</td>
                                <td>{{$p->jumlah_bayar}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
      </div>
  </div>
  </section>

</div>
@endsection