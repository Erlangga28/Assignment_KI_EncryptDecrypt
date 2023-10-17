<?php
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "projectusm"; // Ganti dengan nama database Anda

$conn = mysqli_connect("localhost", "root", "", "projectusm");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>