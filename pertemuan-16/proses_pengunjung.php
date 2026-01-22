<?php
session_start();
require __DIR__ . './koneksi.php';
require_once __DIR__ . '/fungsi.php';

#cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('index.php#contact');
}

#ambil dan bersihkan nilai dari form
$nama_pengunjung  = bersihkan($_POST['txtNmPengunjung']  ?? '');
$alamat_rumah = bersihkan($_POST['txtAlRmh'] ?? '');
$tanggal_kunjungan = bersihkan($_POST['txtTglKunjunganPesan'] ?? '');
$hobi = bersihkan($_POST['txtHobi'] ?? '');
$asal_slta  = bersihkan($_POST['txtAsalSMA']  ?? '');
$pekerjaan = bersihkan($_POST['txtKerja'] ?? '');
$nama_orangtua = bersihkan($_POST['txtNmOrtu'] ?? '');
$nama_pacar = bersihkan($_POST['txtNmPacar'] ?? '');
$nama_mantan = bersihkan($_POST['txtNmMantan'] ?? '');

#Validasi sederhana
$errors = []; #ini array untuk menampung semua error yang ada

if ($nama === '') {
  $errors[] = 'Nama wajib diisi.';
}

if (mb_strlen($nama) < 3) {
  $errors[] = 'Nama minimal 3 karakter.';
}

/*
kondisi di bawah ini hanya dikerjakan jika ada error, 
simpan nilai lama dan pesan error, lalu redirect (konsep PRG)
*/
if (!empty($errors)) {
  $_SESSION['old'] = [
    'nama'  => $nama_pengunjung,
    'alamat' => $alamat_rumah,
    'tanggal_kunjungan' => $tanggal_kunjungan,
    'hobi' => $hobi,
    'asal_slta' => $asal_slta,
    'pekerjaan' => $pekerjaan,
    'nama_ortu' => $nama_orangtua,
    'nama_pcr' => $nama_pacar,
    'nama_mntan' => $nama_mantan
  ];

  $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('index.php#contact');
}

#menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO tbl_pengunjung (nama, alamat, tanggal_kunjungan, hobi, asal_slta, pekerjaan, nama_ortu, nama_pcr, nama_mntan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  #jika gagal prepare, kirim pesan error ke pengguna (tanpa detail sensitif)
  $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
  redirect_ke('index.php#contact');
}
#bind parameter dan eksekusi (s = string)
mysqli_stmt_bind_param($stmt, "sssssssss", $nama_pengunjung, $alamat_rumah, $tanggal_kunjungan, $hobi, $asal_slta, $pekerjaan, $nama_orangtua, $nama_pacar, $nama_mantan);

if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value, beri pesan sukses
  unset($_SESSION['old']);
  $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah tersimpan.';
  redirect_ke('index.php#contact'); #pola PRG: kembali ke form / halaman home
} else { #jika gagal, simpan kembali old value dan tampilkan error umum
  $_SESSION['old'] = [
    'nama'  => $nama_pengunjung,
    'alamat' => $alamat_rumah,
    'tanggal_kunjungan' => $tanggal_kunjungan,
    'hobi' => $hobi,
    'asal_slta' => $asal_slta,
    'pekerjaan' => $pekerjaan,
    'nama_ortu' => $nama_orangtua,
    'nama_pcr' => $nama_pacar,
    'nama_mntan' => $nama_mantan
  ];
  $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
  redirect_ke('index.php#contact');
}
#tutup statement
mysqli_stmt_close($stmt);

$arrcontact = [
  "kodepen" => $_POST["txtKodePen"] ?? "",
  "nama" => $_POST["txtNmPengunjung"] ?? "",
  "alamat" => $_POST["txtAlRmh"] ?? "",
  "tanggal" => $_POST["txtTglKunjungan"] ?? "",
  "hobi" => $_POST["txtHobi"] ?? "",
  "slta" => $_POST["txtAsalSMA"] ?? "",
  "pekerjaan" => $_POST["txtKerja"] ?? "",
  "ortu" => $_POST["txtNmOrtu"] ?? "",
  "pacar" => $_POST["txtNmPacar"] ?? "",
  "mantan" => $_POST["txtNmMantan"] ?? ""
];
$_SESSION["contact"] = $arrcontact;

header("location: index.php#about");
