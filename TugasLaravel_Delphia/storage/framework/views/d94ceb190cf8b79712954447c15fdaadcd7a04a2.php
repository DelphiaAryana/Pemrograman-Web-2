<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <!-- Link untuk menghubungkan ke CSS -->
  <link href="<?php echo asset('assets/css/style.css'); ?>" rel="stylesheet"crossorigin="anonymous">
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
          <a href="">
            <img src="" alt="" class="icon">
            <span clas="description-header">Skincare Recomendation</span>
          </a>
        </div>

        <div class="ilustration">
          <img src="<?php echo asset('storage/app/images/ilustration.png'); ?>" alt="">
        </div>

      </div>
      <div class="main">
        <div class="list-item">
          <a href="<?php echo e(route('dashboard.index')); ?>">
            <img src="<?php echo asset('storage/app/images/Home.png'); ?>" alt="" class="icon" width="20px" height="20px">
            <span class="description">Dashboard</span>
  
          </a>
        </div>

        <div class="list-item">
          <a href="<?php echo e(route('skincare.showDataSkincare')); ?>">
            <img src="<?php echo asset('storage/app/images/Star.png'); ?>" alt="" class="icon" width="20px" height="20px">
            <span class="description">Skincare Recomendation</span>
  
          </a>
        </div>

        <div class="list-item">
          <a href="<?php echo e(route('tips')); ?>">
            <img src="<?php echo asset('storage/app/images/Heart.png'); ?>" alt="" class="icon" width="20px" height="20px">
            <span class="description">Tips to Get Better Skin</span>
  
          </a>
        </div>
      </div>
    </div>

    <div class="main-content">
      <nav class="contt navbar navbar-expand-lg bg-light">
        <div class=" container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('dashboard.index')); ?>">Home</a>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                    <a class="nav-link" href="<?php echo e(route('dashboard.showDataPengguna')); ?>">Data Pengguna</a>
                    <a class="nav-link" href="<?php echo e(route('dashboard.showDataSkincare')); ?>">Data Skincare</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="logg text-end d-flex align-items-center">

                <div class="user me-3">
                    Halo, <?php echo e(Auth::user()->name); ?>

                </div>
                <div class="logout">
                    <a href="<?php echo e(route('login.logout')); ?>" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h2>Selamat Datang, <?php echo e(Auth::user()->name); ?> </h2><br>

                <h5>Kamu punya kulit wajah yang kering? Tenang, pasti ada solusinya kok!</h5><br>
                <div style="text-align: center;">
                  <img src="<?php echo asset('storage/app/images/KulitWajahKering.jpg'); ?>" alt="" width="500px" height="300px" align="center">
                </div>

                <br><br>
                
                <p align="justify">Kulit kering (xerosis) adalah kondisi umum dengan banyak penyebab. 
                  Kulit kering dapat menjadi gejala yang menunjukkan diagnosis yang lebih serius. 
                  Akan tetapi, dalam kebanyakan kasus, kulit kering disebabkan oleh faktor lingkungan yang menghilangkan kelembapan dari kulit. 
                  Misalnya saja, udara kering saat cuaca dingin dapat menyebabkan kelembapan kulit menghilang, sehingga kulit menjadi pecah dan retak-retak.
                  Sayangnya, daerah kulit yang pecah atau merekah dan retak-retak itu kadang kala dapat mengalami iritasi dan terasa gatal. 
                  Adapun ruam kulit kering kadang bahkan berupa bercak-bercak kulit berbentuk bundar yang menyerupai penyakit jamur kulit. 
                  Kulit kering juga bisa dikarenakan kulit yang memang cenderung kering karena kekurangan minyak. 
                  Namun, kurangnya asupan cairan, dehidrasi lantaran penyait, perawatan yang mengeringkan kulit (seperti pemakaian sabun antiseptik), 
                  mandi denga air yang terlalu panas, serta suhu lingkungan yang tinggi dan kelembapan rendah, bisa menjadi faktor lain penyebab kulit kering.

                  </p>
            </div>
        </div>
    </div>
    </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\TugasLaravel_Delphia\resources\views/dashboard.blade.php ENDPATH**/ ?>