<?php
session_start();
if (
    isset($_POST['submit'])
) {
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['kelamin'];
    $tempatLahir = $_POST['tempat'];
    $tanggalLahir = $_POST['tanggal'];
    $agama = $_POST['agama'];
    $alamatLengkap = $_POST['alamat'];
}
// set session
$_SESSION['nama'] = $nama;
$_SESSION['kelamin'] = $jenisKelamin;
$_SESSION['tanggal'] = $tanggalLahir;
$_SESSION['tempat'] = $tempatLahir;
$_SESSION['agama'] = $agama;
$_SESSION['alamat'] = $alamatLengkap;

// set cookies
setcookie('nama', $nama, time() + (86400 * 30), "/");
setcookie('kelamin', $jenisKelamin, time() + (86400 * 30), "/");
setcookie('tanggal', $tanggalLahir, time() + (86400 * 30), "/");
setcookie('tempat', $tempatLahir, time() + (86400 * 30), "/");
setcookie('agama', $agama, time() + (86400 * 30), "/");
setcookie('alamat', $alamatLengkap, time() + (86400 * 30), "/");

header("Location: display.php");
exit();
?>