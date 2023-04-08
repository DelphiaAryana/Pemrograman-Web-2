<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('dashboard.index')); ?>">Home</a>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                    <a class="nav-link" href="<?php echo e(route('dashboard.showDataPengguna')); ?>">Data Pengguna</a>
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
                <h1>Selamat Datang, <?php echo e(Auth::user()->name); ?></h1>
                <h3>Ini adalah halaman Dashboard</h3>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\praktikum5\resources\views/dashboard.blade.php ENDPATH**/ ?>