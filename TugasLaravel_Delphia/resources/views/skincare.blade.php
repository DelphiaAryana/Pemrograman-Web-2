<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <!-- Link untuk menghubungkan ke CSS -->
  <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font dari Google (Google Fonts) -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="container-sidebar">

    <div class="sidebar">
      <div class="header">
        <div class="list-item">
          <a href="#">
            <img src="" alt="" class="icon">
            <span clas="description-header">Skincare Recomendation</span>
          </a>
        </div>

        <div class="ilustration">
          <img src="#" alt="">
        </div>

      </div>
      <div class="main">
        <div class="list-item">
          <a href="{{ route('dashboard.index') }}">
            <img src="{!! asset('storage/app/images/Home.png') !!}" alt="" class="icon" width="20px" height="20px">
            <span class="description">Dashboard</span>
  
          </a>
        </div>

        <div class="list-item">
          <a href="{{ route('skincare.showDataSkincare') }}">
            <img src="{!! asset('storage/app/images/Star.png') !!}" alt="" class="icon" width="20px" height="20px">
            <span class="description">Skincare Recomendation</span>
  
          </a>
        </div>

        <div class="list-item">
          <a href="{{ route('tips') }}">
            <img src="{!! asset('storage/app/images/Heart.png') !!}" alt="" class="icon" width="20px" height="20px">
            <span class="description">Tips to Get Better Skin</span>
  
          </a>
        </div>
      </div>
    </div>

    <div class="main-content">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ route('dashboard.index') }}">Home</a>
                        @can('admin')
                        <a class="nav-link" href="{{ route('dashboard.showDataPengguna') }}">Data Pengguna</a>
                        <a class="nav-link" href="#">Data Skincare</a>
                        @endcan
                    </div>
                </div>
                <div class="text-end d-flex align-items-center">
    
                    <div class="user me-3">
                        Halo, {{ Auth::user()->name }}
                    </div>
                    <div class="logout">
                        <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="data">

          <h2>Rekomendasi Skincare untuk Merawat Kulit Keringmu</h2><br>

          <p align="justify">Punya kulit kering bikin kita harus lebih pilih-pilih dalam menggunakan skincare. Kalau tidak cocok, bisa-bisa kulit semakin kering, bersisik, hingga kulit bisa mengelupas.

            Kalau kulit sudah sampai mengelupas, menggunakan makeup pun jadi lebih sulit dan berisiko iritasi. Oleh karena itu, pastinya Mama butuh produk yang melembabkan dengan harga terjangkau.
            
            Berikut rekomendasi skincare untuk kulit kering dari produk lokal.</p>
          
          <br><br>

          <div class="container-product">
            @foreach ($skincare as $item)
            <div class="product" style="text-align: center">
                <h5>{{ $item->nama }}</h5>
                <img src="{!! asset('storage/app/'.$item->image) !!}" alt="" width="280px" height="280px">
                <p>{{ $item->fungsi }}</p>
                <h6>Kisaran Harga : {{ $item->harga }}</h6>
            </div>
            @endforeach
          </div>
        </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>