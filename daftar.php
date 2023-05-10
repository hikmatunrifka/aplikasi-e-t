<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Trash</title>
    <link rel="icon" href="/foto/Group 150.svg">
    <link rel="stylesheet" href="style/daftar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar">
        <div class="container-fluid te">
          <a>Daftar</a>
        </div>
      </nav>
      <div class="container mt-5 justify-content-center d-flex">
        <form action='auth/daftar_proses.php' method='post'>
            <div class="mb-3">
              <label for="exampleInputNotelepon" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="exampleInputNotelepon" name="no_telepon" aria-describedby="emailHelp">
            </div>
              <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername" name="username" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputKonfirmasipassword" class="form-label">Email address</label>
                  <input type="text" class="form-control" id="exampleInputKonfirmasipassword" name="email" aria-describedby="emailHelp">
                </div>
            <div>
            <button type="submit" class="btn btn-primary mt-5 text-center">Buat Akun</button>
            </div>
          </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>

</html>