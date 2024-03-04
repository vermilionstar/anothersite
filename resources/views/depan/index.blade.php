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
    <title>Shinjuku Store | Cek Data</title>
</head>
<body>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <Center>
                            <td>
                                <h2>Masukan ID Pembayaran Anda</h2>
                            </td>
                        </Center>
                    </div>
                    <form action="/hasil" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="text" name="id_member" class="form-control" id="id_member" placeholder="Masukan ID Anda" required>
                        </div>
                        <center>
                            <td>
                                <button type="submit">Simpan</button>
                            </td>
                        </center>
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