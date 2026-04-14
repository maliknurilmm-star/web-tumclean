<?php
$conn = mysqli_connect("localhost", "root", "", "website");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>