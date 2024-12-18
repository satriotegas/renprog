<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renprog Overview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link.active {
            background-color: #007bff;
            color: white !important;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <img src="img/hidros_logo.png" alt="Logo" width="18" height="24" class="d-inline-block align-text-top mr-1">
            <a class="navbar-brand me-3" href="#">Renprog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#form">Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#progress">Progres</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add active class to the current section link
        document.addEventListener('DOMContentLoaded', () => {
            const navLinks = document.querySelectorAll('.nav-link');

            const handleScroll = () => {
                let fromTop = window.scrollY;

                navLinks.forEach(link => {
                    const section = document.querySelector(link.getAttribute('href'));

                    if (section.offsetTop <= fromTop + 50 && section.offsetTop + section.offsetHeight > fromTop + 50) {
                        navLinks.forEach(l => l.classList.remove('active'));
                        link.classList.add('active');
                    }
                });
            };

            window.addEventListener('scroll', handleScroll);
            handleScroll();
        });
    </script>
</body>
</html>
