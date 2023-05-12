<!DOCTYPE html>
<html>
<head>
    <title>Pencarian</title>
    <!-- memanggil file CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- memanggil file CSS yang telah dibuat -->
    <link rel="stylesheet" href="style/pencarian.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Pencarian</h1>
        <!-- Tombol back -->
        <a href="#" class="back-btn"><i class="bi bi-arrow-left"></i></a>
        <form class="row gy-2 gx-3 align-items-center">
            <div class="col-md-8">
                <label class="visually-hidden" for="search">Cari</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="search" placeholder="Cari akun">
                    <button type="submit" class="btn btn-cari">Cari</button>
                </div>
            </div>
        </form>
        <div class="row mt-5">
            <div class="col-md-8">
                <h2>Riwayat Pencarian</h2>
                <ul class="list-group mt-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Amishop.co <i class="bi bi-x-lg"></i></li>
                </ul>

            </div>
            <div class="col-md-4">
                <h2>Kategori Sampah</h2>
                <ul class="list-group mt-4">
                    <li class="list-group-item">Plastik</li>
                    <li class="list-group-item">Kertas</li>
                    <li class="list-group-item">Logam</li>
                    <li class="list-group-item">Kaca</li>
                    <li class="list-group-item">Organik</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- memanggil file JavaScript Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
