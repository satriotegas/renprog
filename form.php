<?php
session_start();
require "conn.php";
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
    <!-- Form Section -->
    <section id="form" class="py-5">
        <div class="container">
            <h2 class="mb-4">Form Input Surat</h2>
            <form action="forminput.php" method="post">
                <div class="mb-3">
                    <label for="surat" class="form-label">Nomor :</label>
                    <input type="text" class="form-control" name="surat" id="surat" placeholder="Masukkan Nomor Surat" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal :</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal Surat" required>
                </div>
                <div class="mb-3">
                    <label for="perihal" class="form-label">Perihal :</label>
                    <input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" required>
                </div>
                <div class="mb-3">
                    <label for="dari" class="form-label">Dari :</label>
                    <input type="text" class="form-control" name="dari" id="dari" placeholder="Pengirim Surat" required>
                </div>
                <div class="mb-3">
                    <label for="kepada" class="form-label">Kepada :</label>
                    <input type="text" class="form-control" name="kepada" id="kepada" placeholder="Tujuan Surat" required>
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
                    <div class="modal-dialog modal-right">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="itemModalLabel">Pilih Item dan Jumlah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" >
                                <div class="mb-3">
                                    <label for="itemList" class="form-label">Item:</label>
                                    <select class="form-select" id="itemList" multiple style="height: 50vh;">
                                        <!-- tampilkan option item stok -->
                                        <?php
                                        $sql = "SELECT * FROM item";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                            $id = $row['id'];
                                            $item = $row['item'];
                                            $kategori = $row['cat'];
                                            $nomor = $row['number'];
                                            $title = $row['title'];
                                        
                                            echo "<option value={$item}>{$item}</option>";
                                          }
                                        } else {
                                          echo "no results";
                                        }
                                        $conn->close();
                                        ?>
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
                    <label class="form-label">Status Surat:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="step" id="flexRadioDefault1" value="step1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Selesai Edit
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="step" id="flexRadioDefault2" value="step2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Permohonan Softfile
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="step" id="flexRadioDefault2" value="step3">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Speng Softfile
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="step" id="flexRadioDefault2" value="step4" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Speng Cetak
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="step" id="flexRadioDefault2" value="step5">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Selesai Cetak
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="step" id="flexRadioDefault2" value="step6">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Distribusi
                        </label>
                    </div>
                    
                </div>

                <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"  style="width: 200px;font-weight:bold">
            </form>
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
        
        // Perbarui tampilan daftar item
        function updateItemDisplay() {
            // Hapus semua item dengan quantity <= 0
            selectedItems = selectedItems.filter(i => i.quantity > 0);

            // Perbarui tampilan daftar item
            document.getElementById('itemDisplay').value = selectedItems.map(i => `${i.item} (${i.quantity})`).join(', ');

            // Simpan data terbaru di hidden input
            document.getElementById('selectedItems').value = JSON.stringify(selectedItems);
        }

        // Tambahkan item
        document.getElementById('addItem').addEventListener('click', function () {
            let itemList = document.getElementById('itemList');
            let itemQuantity = document.getElementById('itemQuantity').value;

            // Validasi bahwa quantity diisi dan minimal satu item dipilih
            if (itemQuantity && itemList.selectedOptions.length > 0) {
                let selectedItemNames = Array.from(itemList.selectedOptions).map(option => option.text);

                selectedItemNames.forEach(itemName => {
                    // Cek apakah item sudah ada di selectedItems
                    let existingItem = selectedItems.find(i => i.item === itemName);

                    if (existingItem) {
                        // Tambahkan quantity ke item yang sudah ada
                        existingItem.quantity = parseInt(existingItem.quantity) + parseInt(itemQuantity);
                    } else {
                        // Jika item belum ada, tambahkan sebagai item baru
                        selectedItems.push({ item: itemName, quantity: parseInt(itemQuantity) });
                    }
                });

                // Perbarui tampilan dan simpan
                updateItemDisplay();
            }
        });

        // Kurangi atau hapus item
        document.getElementById('removeItem').addEventListener('click', function () {
            let itemList = document.getElementById('itemList');
            let itemQuantity = document.getElementById('itemQuantity').value;

            // Validasi bahwa quantity diisi dan minimal satu item dipilih
            if (itemQuantity && itemList.selectedOptions.length > 0) {
                let selectedItemNames = Array.from(itemList.selectedOptions).map(option => option.text);

                selectedItemNames.forEach(itemName => {
                    // Cek apakah item sudah ada di selectedItems
                    let existingItem = selectedItems.find(i => i.item === itemName);

                    if (existingItem) {
                        // Kurangi quantity
                        existingItem.quantity = parseInt(existingItem.quantity) - parseInt(itemQuantity);

                        // Hapus item jika quantity <= 0
                        if (existingItem.quantity <= 0) {
                            selectedItems = selectedItems.filter(i => i.item !== itemName);
                        }
                    }
                });

                // Perbarui tampilan dan simpan
                updateItemDisplay();
            }
        });

    </script>
    <?php
    require 'footer.php';
    ?>
  </body>
</html>