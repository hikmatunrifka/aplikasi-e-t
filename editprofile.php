<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pengaturan</title>
    <style>
      /* Mengatur tampilan halaman */
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        margin: 0;
        padding: 0;
      }

      /* Mengatur tampilan judul halaman */
      h1 {
        text-align: center;
        color: #333;
      }

      /* Mengatur tampilan form */
      form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }

      /* Mengatur tampilan fieldset */
      fieldset {
        border: none;
        margin: 0;
        padding: 0;
      }

      /* Mengatur tampilan label */
      label {
        display: inline-block;
        margin-bottom: 5px;
        color: #333;
      }

      /* Mengatur tampilan input */
      input {
        display: block;
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        margin-bottom: 10px;
      }

      /* Mengatur tampilan input untuk warna */
      input[type="color"] {
        height: 40px;
        width: 100%;
      }

      /* Mengatur tampilan input untuk range */
      input[type="range"] {
        width: 100%;
      }

      /* Mengatur tampilan tombol submit */
      input[type="submit"] {
        display: block;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
      }

      /* Mengatur tampilan tombol submit saat diklik */
      input[type="submit"]:active {
        transform: translateY(2px);
      }
    </style>
  </head>
  <body>
    <h1>Pengaturan</h1>
    <form action="auth/update_data.php" method= "post">
      <fieldset>
        <legend>Akun</legend>
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="name" name="username" value="<?php echo $_SESSION['username'];?>">
        <br />
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $_SESSION['email'];?>" /><br />
        <label for="password">Kata Sandi:</label>
        <input type="password" id="password" name="password" /><br />
        <label for="password">Kata Sandi Baru:</label>
        <input
          type="new password"
          id="new password"
          name="new password"
        /><br />
      </fieldset>
      <input type="submit" value="Simpan" />
    </form>
  </body>
</html>
