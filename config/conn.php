<?php

// database online
// Membuat koneksi ke database
$host = "localhost"; // Host database (biasanya "localhost")
$username = "root"; // Username database
$password = ""; // Password database (kosongkan jika tidak ada)
$database = "sisabsi"; // Nama database yang akan digunakan


$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memilih database
$pilih_db = mysqli_select_db($koneksi, $database);
if (!$pilih_db) {
    die("Gagal memilih database: " . mysqli_error($koneksi));
}

// Melakukan query
$sql = mysqli_query($koneksi, "SELECT * FROM sekolah WHERE id='2'");
if (!$sql) {
    die("Query error: " . mysqli_error($koneksi));
}

// Mengambil hasil query
$rs = mysqli_fetch_array($sql);
?>