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
            <form action="form.php" method="post">
                <div class="mb-3">
                    <label for="surat" class="form-label">Nomor :</label>
                    <input type="text" class="form-control" name="surat" id="surat" placeholder="Masukkan Nomor Surat">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal :</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal Surat">
                </div>
                <div class="mb-3">
                    <label for="perihal" class="form-label">Perihal :</label>
                    <input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal">
                </div>
                <div class="mb-3">
                    <label for="dari" class="form-label">Dari :</label>
                    <input type="text" class="form-control" name="dari" id="dari" placeholder="Pengirim Surat">
                </div>
                <div class="mb-3">
                    <label for="kepada" class="form-label">Kepada :</label>
                    <input type="text" class="form-control" name="kepada" id="kepada" placeholder="Tujuan Surat">
                </div>
                
                <!-- Item Selection -->
                <div class="mb-3">
                    <label for="item" class="form-label">Pilih Item dan Jumlah:</label>
                    <input type="text" class="form-control" id="itemDisplay" placeholder="Pilih Item" readonly data-bs-toggle="modal" data-bs-target="#itemModal">
                    <!-- Hidden input to store selected items as JSON -->
                    <input type="hidden" name="items" id="selectedItems">
                </div>
                
                <!-- Modal for Item Selection -->
                <div class="modal fade" id="itemModal" tabindex="-1" aria-labelledby="itemModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="itemModalLabel">Pilih Item dan Jumlah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="itemList" class="form-label">Item:</label>
                                    <select class="form-select" id="itemList" multiple>
                                        <option value="item1">Item 1</option>
                                        <option value="item2">Item 2</option>
                                        <option value="item3">Item 3</option>
                                        <option value="item4">Item 4</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="itemQuantity" class="form-label">Jumlah:</label>
                                    <input type="number" class="form-control" id="itemQuantity" placeholder="Jumlah" min="1">
                                </div>
                                <button type="button" class="btn btn-primary" id="addItem">Tambah Item</button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="saveItems">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="mb-3">
                    <label class="form-label">Pilih Opsi:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Option1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Opsi 1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Option2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Opsi 2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="Option3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Opsi 3
                        </label>
                    </div>
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
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Handle item selection and quantity
        let selectedItems = [];

        // When an item is added
        document.getElementById('addItem').addEventListener('click', function() {
            let itemList = document.getElementById('itemList');
            let itemQuantity = document.getElementById('itemQuantity').value;

            // Validate that the quantity is provided and at least one item is selected
            if (itemQuantity && itemList.selectedOptions.length > 0) {
                let selectedItemNames = Array.from(itemList.selectedOptions).map(option => option.text);
                
                selectedItemNames.forEach(item => {
                    selectedItems.push({ item: item, quantity: itemQuantity });
                });

                // Display the selected items in the input field
                document.getElementById('itemDisplay').value = selectedItems.map(i => `${i.item} (${i.quantity})`).join(', ');

                // Store the selected items as a JSON string in the hidden input field
                document.getElementById('selectedItems').value = JSON.stringify(selectedItems);
            }
        });

        // When the save button is clicked
        document.getElementById('saveItems').addEventListener('click', function() {
            // Save items and close modal
            $('#itemModal').modal('hide');
        });
    </script>
    <?php
    require 'footer.php';
    ?>
  </body>
</html>