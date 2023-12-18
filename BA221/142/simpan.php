<?php

$nama = $_POST['name'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

$foto = basename($_FILES['foto']['name']);
$target_dir = "foto/";
$target_file = $target_dir . $foto;
$filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$uploadOK = 1;

//cek file sama
if(file_exists($target_file)){
    echo "<script> alert('file sudah ada'); </script>";
    $uploadOK = 0;
}

//cek type file
if($filetype !="jpg" && $filetype != "png" && $filetype !="jpeg"){
    echo "<script> alert('file ditolak'); </script>";
    $uploadOK = 0;
}

if($uploadOK == 1){
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)){
        echo "<script> alert('upload berhasil'); </script>";
    }
    else{
        echo "<script> alert('upload file gagal'); </script>";
    }
}
else{
    echo"upload di tolak";
}
// echo $namalengkap . "<br>" . $namapanggilan;
// echo "Nama Lengkap : $namalengkap <br>";
// echo "Nama Panggilan : $namapanggilan";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div style="margin-top: 10%;" class="d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="<?= $target_file ?>" class="card-img-top" alt="profile pic">
        <div class="card-body">
            <p class="card-text"> <b>Nama : </b> <?= $nama ?> </p>
            <p class="card-text"> <b>Alamat : </b> <?= $alamat ?></p>
            <p class="card-text"> <b>No HP : </b> <?= $nohp ?></p>
            <p class="card-text"> <b>Email : </b> <?= $email ?></p>
        </div>
    </div>
</div>


</body>
</html>