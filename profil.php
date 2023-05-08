<?php
include'navbar.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Profil Saya</title>
    <link rel="stylesheet" href="style/profil.css" />
  </head>
  <body>
    <nav>
      <div class="wrapper">
        <!-- <div class="logo"><a href="beranda.html">e-T</a></div> -->
        <div class="menu">
          <a href="beranda.html"
            ><img src="foto/Group 150.svg" lt="Image" height="53" width="53"
          /></a>
        </div>
        <div class="menu">
          <ul>
            <li><a href="beranda.html" style="color: white">Beranda</a></li>
            <li>
              <a href="daftarPengrajin.html" style="color: white"
                >Daftar Pengrajin</a
              >
            </li>
            <li><a href="pesan.html" style="color: white">Pesan</a></li>
            <li><a href="profil.html" style="color: white">Profil</a></li>
            <li>
              <a href="pengaturan.html" style="color: white">Pengaturan</a>
            </li>
          </ul>
        </div>
        <div class="searchBox">
          <form>
            <input type="text" placeholder="Cari..." />
            <button type="submit">Search</button>
          </form>
          <div><a href="index.html" class="tbl-biru">Keluar Akun</a></div>
        </div>
      </div>
    </nav>
    <main>
      <section class="profil">
        <img
          src="https://th.bing.com/th/id/OIP.Ghae4OEdb4UmC3hkqpFvLAHaGd?pid=ImgDet&rs=1"
          alt="Foto Profil"
        />
        <div>
          <h2>Nama Saya</h2>
          <div class="status">
            <p>Post</p>
            <p>Followers</p>
            <p>Following</p>
          </div>
        </div>
        <a href="#"><button class="btn-edit">Edit Profil</button></a>
      </section>
    </main>
  </body>
</html>