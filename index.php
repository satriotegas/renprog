<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Renprog</title>
    <link rel="icon" type="image/x-icon" href="img/hidros_icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar -->
    <?php
    require 'navbar.php';
    ?>
    <!-- Main Content -->
  <div class="container my-5">
    <h1 class="text-center">Welcome to Renprog</h1>
    <p class="lead text-center">Aplikasi Renprog untuk memantau progres pencetakan dan pengelolaan program kerja Subdis Renprog</p>
    
    <!-- List Group for Features -->
    <h3 class="text-center">Fitur</h3>
    <div class="list-group">
      <a href="index.php" class="list-group-item list-group-item-action">
        <h5 class="mb-1">Home</h5>
        <p class="mb-1">Halaman utama aplikasi yang menampilkan ringkasan aktivitas dan informasi terkait program renprog.</p>
      </a>
      <a href="form.php" class="list-group-item list-group-item-action">
        <h5 class="mb-1">Form</h5>
        <p class="mb-1">Berisi formulir untuk penginputan surat berdasarkan item yang masuk dalam program cetak. Formulir ini mempermudah pengguna dalam mendokumentasikan surat-surat yang akan diproses.</p>
      </a>
      <a href="progres.php" class="list-group-item list-group-item-action">
        <h5 class="mb-1">Progres</h5>
        <p class="mb-1">Menyajikan informasi umum tentang progres pencetakan setiap item dalam program kerja. Pengguna dapat memantau status pencetakan dan melihat detail data surat yang telah dibuat.</p>
      </a>

      <a href="surat.php" class="list-group-item list-group-item-action">
        <h5 class="mb-1">Surat</h5>
        <p class="mb-1">Berisi informasi keseluruhan daftar surat yang telah diinput dalam program renprog</p>
      </a>
    </div>
  </div>

    <!-- Footer -->
    <footer class="py-4 bg-dark text-light text-center">
        <p>&copy; 2024 Renprog. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    require 'footer.php';
    ?>
  </body>
</html>