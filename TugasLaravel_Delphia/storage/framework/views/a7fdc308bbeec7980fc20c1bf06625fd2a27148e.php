<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <!-- Link untuk menghubungkan ke CSS -->
  <link href="<?php echo asset('assets/css/style.css'); ?>" rel="stylesheet" crossorigin="anonymous">
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
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
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
                <div class="text-end d-flex align-items-center">
    
                    <div class="user me-3">
                        Halo, <?php echo e(Auth::user()->name); ?>

                    </div>
                    <div class="logout">
                        <a href="<?php echo e(route('login.logout')); ?>" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

        <br><br>

        <h3 class="text-center">Tambah Data Skincare</h3>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-5 border rounded mt-2">
                    <form action="<?php echo e(route('data_skincare.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">                         
                        </div>

                        <div class="mb-3">
                            <label for="fungsi" class="form-label">Fungsi</label>
                            <input type="text" class="form-control" id="fungsi" name="fungsi">                         
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Kisaran Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">                         
                        </div>

                        <div class="row mx-2">
                            <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\TugasLaravel_Delphia\resources\views/tambah_skincare.blade.php ENDPATH**/ ?>