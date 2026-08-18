<?php 
$conn = mysqli_connect(
    "localhost", 
    "root",
    "",
    "resto"
);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>