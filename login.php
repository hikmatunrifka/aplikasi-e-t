<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>E-Trash</title>
  <link rel="icon" href="foto/Group 150.svg" />
  <link rel="stylesheet" href="style/login.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <style>
    .signin-btn {
      background-color: #395144;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .signin-btn:hover {
      background-color: #274033;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }

    .mb-3 {
      margin-bottom: 15px;
    }

    .form-label {
      font-weight: bold;
    }

    .mb-3 p {
      margin-bottom: 0;
    }
  </style>
</head>

<body>
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="foto/Group 150.svg" alt="Logo" width="30" class="d-inline-block" />
        e-Trash
      </a>
    </div>
  </nav>
  <div class="container mt-5">
    <form action="auth/auth.php" method="post">
      <div class="mb-3">
        <label for="Email" class="form-label">Email address</label>
        <input type="text" class="form-control" name="Email" aria-describedby="emailHelp" />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" />
      </div>
      <div class="mb-3">
        <p><a href="lupapassword.html">Lupa Password</a></p>
      </div>
      <button type="signin" class="btn btn-primary signin-btn">SignIn</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
