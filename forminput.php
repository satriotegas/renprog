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

    $stmt = $conn->prepare("INSERT INTO surat (no_surat,tanggal,perihal,dari,kepada,items,status_surat) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$no_surat,$tanggal,$perihal,$dari,$kepada,$items,$status_surat);

    //set params and excecute
    if ($_POST['submit']) {
        $no_surat=$_POST['surat'];
        $tanggal=$_POST['tanggal'];
        $perihal=$_POST['perihal'];
        $dari=$_POST['dari'];
        $kepada=$_POST['kepada'];
        $items=$_POST['items'];
        $status_surat=$_POST['step'];

        $stmt->execute();
        echo "New records created successfully";
    }  else {
        echo "Input data gagal";
    }
    
    
    $stmt->close();
    $conn->close();


    ?>



    <!-- Footer -->
    <footer class="py-4 bg-dark text-light text-center">
        <p>&copy; 2024 Renprog. All rights reserved.</p>
    </footer>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    require 'footer.php';
    ?>
  </body>
</html>