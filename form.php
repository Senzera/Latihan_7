<?php
session_start();


if(isset($_COOKIE['nama']) && isset($_COOKIE['jeniskelamin']) && isset($_COOKIE['tempatlahir']) && isset($_COOKIE['tanggallahir']) 
&& isset($_COOKIE['agama']) && isset($_COOKIE['alamatlengkap'])) {
  $nama = $_COOKIE['nama'];
  $jeniskelamin = $_COOKIE['jeniskelamin'];
  $tempatlahir = $_COOKIE['tempatlahir'];
  $tanggallahir = $_COOKIE['tanggallahir'];
  $agama = $_COOKIE['agama'];
  $alamatlengkap = $_COOKIE['alamatlengkap'];
} else {

  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Session And Cookie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card mt-4 mb-4 mx-auto" style="width: 36rem; border-radius:30px;">
        <div class="container p-5">
            <h1><strong>MY BIODATA</strong></h1>

            <p>Silahkan Lihat Data Diri Anda Dibawah ini</p>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </symbol>
                    </svg>
                    <strong>Data Kamu berhasil Di simpan!</strong>
                </div>
                <div>Data Kamu berhasil Di simpan dalam Cookie / Session</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <table class="table table-striped">
            <tbody>
                <tr>
                <td>Nama Lengkap : <?php echo $nama; ?></td>
                </tr>
                <tr>
                <td>Jenis Kelamin : <?php echo $jeniskelamin; ?></td>
                </tr>
                <tr>
                <td>Tempat Lahir : <?php echo $tempatlahir; ?></td>
                </tr>
                <td>Tanggal Lahir : <?php echo $tanggallahir; ?></td>
                </tr>
                <td>Agama : <?php echo $agama; ?></td>
                </tr>
                <td>Alamat Lengkap : <?php echo $alamatlengkap; ?></td>
                </tr>
            </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="create.php" class="btn btn-danger">Kembali</a>
            </div>
            
        </div>
    </div>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>