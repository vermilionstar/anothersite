<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Pembelian</title>
</head>
<body onload="window.print()">
    <center><table width="400px">
            <tr align="center">
                <center><td colspan="3"><h1>Shinjuku Store</h1></td></center>
            </tr>
            <tr align="center">
                <td colspan="3"><b>Struk Pembelian</b></td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td colspan="2"> Petugas : {{ Auth()->user()->nama_petugas}}</td>
                <td align="right">Tanggal : <?php echo date("Y/m/d");?></td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td> <b>ID Member</b></td>
                <td align="right">:</td>
                <td>{{$penjualan->id_member}}</td>
            </tr>
            <tr>
                <td><b>Nama Customer</b></td>
                <td align="right">:</td>
                <td>{{$penjualan->member->nama}}</td>
            </tr>
            <tr>
                <td><b>Nama Petugas</b></td>
                <td align="right">:</td>
                <td>{{$penjualan->user->nama_petugas}}</td>
            </tr>
            <tr>
                <td><b>Sepatu</b></td>
                <td align="right">:</td>
                <td>{{$penjualan->sepatu->merk}} - {{$penjualan->sepatu->nama_sepatu}}</td>
            </tr>
            <tr>
                <td><b>Supplier</b></td>
                <td align="right">:</td>
                <td>{{$penjualan->sepatu->id_supplier}}</td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td colspan="3">
                    Note:
                    <center><br>
                    <b> - STRUK INI SEBAGAI BUKTI PEMINJAMAN -</b>
                    <br>
                    <b>- HARAP SIMPAN DENGAN BAIK -</b></center>
                </td>
            </tr>
    </table>
</center>
</body>
</html>