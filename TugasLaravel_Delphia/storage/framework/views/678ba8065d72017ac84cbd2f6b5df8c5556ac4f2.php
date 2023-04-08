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

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h2>Tips Merawat Kulit Kering</h2><br>
                <div class="text">
                  <p align="justify">Kulit yang terlihat kering dan kasar tentu mengganggu penampilan dan rasa percaya diri. Nah, ada berbagai cara merawat kulit kering yang dapat Anda coba lakukan. Dengan demikian, kulit sehat dan tampak lembut pun dapat Anda wujudkan.
                    Kulit kering ditandai dengan permukaan kulit yang kasar, pecah-pecah, dan mudah terkelupas. Kondisi ini dapat disebabkan oleh berbagai hal, seperti paparan sinar matahari, kebiasaan mandi terlalu lama, hingga penggunaan produk perawatan kulit yang kurang tepat. 
                    Tak hanya itu,  berbagai gangguan pada kulit juga dapat menyebabkan kulit menjadi kering, seperti eksim dan psoriasis. Terlepas dari apa pun penyebabnya, ada beberapa tips merawat kulit kering yang dapat Anda coba lakukan, yaitu:</p>
                  <ul>
                    <li>Hindari mandi dengan air yang terlalu panas</li>
                    <li>Gunakan sabun berbahan lembut</li>
                    <li>Gunakan tabir surya dan pelembap</li>
                    <li>Lakukan perawatan di malam hari</li>
                    <li>Lindungi kulit dari udara dingin</li>
                    <li>Lakukan eksfoliasi</li>
                    <li>Nutrisi kulit dari dalam</li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\TugasLaravel_Delphia\resources\views/tips.blade.php ENDPATH**/ ?>