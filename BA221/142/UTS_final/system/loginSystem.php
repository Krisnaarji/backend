<?php

include "./backend/database_con.php";
$myfile = fopen("system/file.txt", "a");
$waktu = date('Y-m-d');

session_start();

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$hasil = mysqli_query($conn, $sql);

if ($hasil->num_rows > 0) {
    $row = mysqli_fetch_assoc($hasil);
    session_start();
    $_SESSION['username'] = $row['nama_admin'];
    fwrite($myfile, "$waktu - ".$_SESSION['username']." : Login Berhasil \n");
    header("Location: dashboard.php");
    exit();
} else {
    echo "<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Username dan password salah, coba ulangi lagi !',
        });
    });
        </script>";
        fwrite($myfile, "$waktu - ".$_SESSION['username']." : Login salah \n");
}
