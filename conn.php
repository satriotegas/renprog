<?php
$server = "localhost:3307";
$user = "root";
$password = "";
$database = "renprog";

$conn = new mysqli($server,$user,$password,$database);

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
?>