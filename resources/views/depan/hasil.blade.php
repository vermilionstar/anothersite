<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/adminlte.min.css')}}">
    <title>Shinjuku Store | Hasil Data</title>
</head>
<body>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h2>Cek Data Pembayaran</h2>
                        </center>
                    </div>
                    <form action="/hasil" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-stripped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">NO/ID</th>
                                        <th scope="col">Petugas</th>
                                        <th scope="col">Member</th>
                                        <th scope="col">Sepatu</th>
                                        <th scope="col">Tanggal Bayar</th>
                                        <th scope="col">Jumlah Bayar</th>
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
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <center>
                                <a href="/cek" class="btn btn-danger">Kembali</a>
                                <a href="/dashboard" class="btn btn-warning">Keluar</a>
                            </center>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
    <script src="{{asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</html>