@extends('layouts.master')
@section('title','Contact Us')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Contact us</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact us</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2>Shinjuku<strong>Store</strong></h2>
              <p class="lead mb-5">354 Kanto, Shinjuku, 9876 SJ<br>
                Phone: +09278345728
              </p>
            </div>
          </div>
          <div class="col-7">
            <form action="/contactus/simpan" method="POST">
                @csrf
                <div class="form-group" >
                    <label for="inputName" class="form-label">Name</label>
                    <input type="text" id="inputName" name="nama" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="form-label">E-Mail</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="inputSubject" class="form-label">Subject</label>
                    <input type="text" id="inputSubject" name="subject" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="inputMessage" class="form-label">Message</label>
                    <textarea id="inputMessage" class="form-control" name="pesan" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    {{-- <input type="submit" class="btn btn-primary" value="Send message"> --}}
                    <button type="submit" class="btn btn-primary">Kirim</button>
                  </div>
                </form>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>

@endsection