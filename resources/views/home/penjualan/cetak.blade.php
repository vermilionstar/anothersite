<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Transaksi Pembayaran</title>
</head>
<body onload="window.print()">
    <center>
        <h2>Laporan Transaksi Pembayaran</h2>
        <table class="table table-primary" border="1">
            <thead>
                <tr>
                    <th >No</th>
                    <th >Nama</th>
                    <th >Sepatu</th>
                    <th >Tanggal Bayar</th>
                    <th >Jumlah Bayar</th>
                    <th >Petugas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan as  $u)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$u->id}} - {{$u->member->nama}}</td>
                    <td>{{$u->sepatu->nama_sepatu}} - {{$u->sepatu->merk}}</td>
                    <td>{{$u->tgl_bayar}}</td>
                    <td>{{$u->jumlah_bayar}}</td> 
                    <td>{{$u->user->id}} - {{$u->user->nama_petugas}}</td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </center>
    <div class="kotak" style="margin-top: 500px">
        <p>Tokyo..............</p>
        <br>
        <br>
        <p>Administrasi Perusahaan</p>
    </div>
</body>
</html>