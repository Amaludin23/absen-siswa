<?php
$hari = hari_ina(date("l")); // Mengubah fungsi `hari_ina` menjadi variabel `hari`
$query = mysqli_prepare($koneksi, "SELECT * FROM hari WHERE hari=?"); // Gunakan prepared statement
mysqli_stmt_bind_param($query, "s", $hari);
mysqli_stmt_execute($query);
$result = mysqli_stmt_get_result($query);
$id_hari = mysqli_fetch_assoc($result);
mysqli_stmt_close($query);

$now = date("H:i:s");

// Aktifkan jadwal yang sesuai
$stmt = mysqli_prepare($koneksi, "UPDATE jadwal SET aktif=1 WHERE idh=? AND jam_mulai <= ? AND jam_selesai >= ?"); // Gunakan prepared statement
mysqli_stmt_bind_param($stmt, "iss", $id_hari['idh'], $now, $now);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

// Nonaktifkan jadwal lain yang tidak sesuai
$stmt = mysqli_prepare($koneksi, "UPDATE jadwal SET aktif=0 WHERE idh <> ?"); // Gunakan prepared statement
mysqli_stmt_bind_param($stmt, "i", $id_hari['idh']);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

// Nonaktifkan jadwal di hari ini yang sudah selesai
$stmt = mysqli_prepare($koneksi, "UPDATE jadwal SET aktif=0 WHERE idh=? AND (jam_mulai > ? OR jam_selesai < ?)"); // Gunakan prepared statement
mysqli_stmt_bind_param($stmt, "iss", $id_hari['idh'], $now, $now);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

// Periksa status aktif jadwal yang dipilih
$stmt = mysqli_prepare($koneksi, "SELECT * FROM jadwal WHERE idj=?");
mysqli_stmt_bind_param($stmt, "i", $_GET['idj']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$aktifgak = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if ($aktifgak['aktif'] == 1) {
    include "input_absen.php";
} else {
    echo "<center><br><h3>Maaf, Anda tidak bisa mengabsen siswa diluar jam pelajaran.</h3>
    <a href=media.php?module=jadwal_mengajar><b>Kembali</b></a></center>";
}
?>