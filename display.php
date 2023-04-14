<?php
session_start();

if (
    isset($_COOKIE['nama']) && isset($_COOKIE['kelamin']) && isset($_COOKIE['tempat']) && isset($_COOKIE['tanggal'])
    && isset($_COOKIE['agama']) && isset($_COOKIE['alamat'])
) {
    $nama = $_COOKIE['nama'];
    $jenisKelamin = $_COOKIE['kelamin'];
    $tempatLahir = $_COOKIE['tempat'];
    $tanggalLahir = $_COOKIE['tanggal'];
    $agama = $_COOKIE['agama'];
    $alamatLengkap = $_COOKIE['alamat'];
} else {
    header("Location: form.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="py-5 mb bg-primary-subtle mh-100 " style="height:100vh" >
        <div class="mx-5" >
            <h2 class="h2 mx-5">My Biodata</h2>
            <p class="lead mx-5 pb-4">
                Look your personal data here
            </p>
        </div>
        <div >
            <h4 class="h4 mx-5 mt-5">Nama :
                <?= $nama ?>
            </h4>
            <h4 class="h4 mx-5">Jenis Kelamin :
                <?= $jenisKelamin ?>
            </h4>
            <h4 class="h4 mx-5">Tempat, Tanggal Lahir :
                <?= $tempatLahir ?>,
                <?= $tanggalLahir ?>
            </h4>
            <h4 class="h4 mx-5">Agama :
                <?= $agama ?>
            </h4>
            <h4 class="h4 mx-5 mb-5">Alamat Lengkap :
                <?= $alamatLengkap ?>
            </h4>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-5 ">
        <a href="form.php" class="btn btn-primary mx-5">Back</a>
    </div>
    </div>

</body>

</html>