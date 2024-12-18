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

    <!-- Home Section -->
    <section id="home" class="py-5 bg-light">
        <div class="container">
            <h1 class="text-center">Welcome to Renprog</h1>
            <p class="text-center">Platform untuk memantau progres pencetakan dan program kerja Subdis Renprog.</p>
        </div>
    </section>

    <!-- Form Section -->
    <section id="form" class="py-5">
        <div class="container">
            <h2 class="mb-4">Form Input Surat</h2>
            <form>
                <div class="mb-3">
                    <label for="itemName" class="form-label">Nama Item</label>
                    <input type="text" class="form-control" id="itemName" placeholder="Masukkan nama item">
                </div>
                <div class="mb-3">
                    <label for="suratNumber" class="form-label">Nomor Surat</label>
                    <input type="text" class="form-control" id="suratNumber" placeholder="Masukkan nomor surat">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Masukkan deskripsi"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <!-- Progres Section -->
    <section id="progress" class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Progres Cetak</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Item</th>
                            <th scope="col">Nomor Surat</th>
                            <th scope="col">Status</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Item A</td>
                            <td>12345</td>
                            <td>Dalam Proses</td>
                            <td>Deskripsi singkat item A</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Item B</td>
                            <td>67890</td>
                            <td>Selesai</td>
                            <td>Deskripsi singkat item B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

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