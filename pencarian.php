<!DOCTYPE html>
<html>
<head>
	<title>Pencarian</title>
	<!-- memanggil file CSS Bootstrap -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
	<head>
		<title>Pencarian</title>
		<!-- memanggil file CSS Bootstrap -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
		<!-- memanggil file CSS yang telah dibuat -->
		<link rel="stylesheet" href="style/pencarian.css">
	  </head>
	  
</head>
<body>
	<div class="container mt-5">
		<h1 class="mb-4 text-center">Pencarian</h1>
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
				<h2>Daftar Pencarian</h2>
				<ul class="list-group mt-4">
					<li class="list-group-item">Amishop.co</li>
					<li class="list-group-item">flowercown.id</li>
					<li class="list-group-item">miss.diy</li>
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