
<?php
include 'database_con.php';
$nim = mysqli_real_escape_string($conn, $_POST['nim']);
$nama_mhs = mysqli_real_escape_string($conn, $_POST['nama']);
$jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$foto = basename($_FILES['foto']['name']);
$target_dir = "./foto/";
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

        $check_query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
        $result = mysqli_query($conn, $check_query);
        
        if (mysqli_num_rows($result) > 0){
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Nim Sudah Terbuat',
            });
            </script>";
            }else{
                $qry = "INSERT INTO mahasiswa VALUES (
                    '$nim', '$nama_mhs', '$jurusan', '$gender', '$alamat', '$no_hp', '$email', '$foto'
                )";
        
                $exec = mysqli_query($conn, $qry);
        
                if($exec){
                        echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Data berhasil disimpan',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = './mahasiswa.php';
                            }
                        });
                    </script>";
                }else{
                    echo "Data gagal di simpan";
                }
            }


        echo "<script> alert('upload berhasil'); </script>";
    }
    else{
        echo "<script> alert('upload file gagal'); </script>";
    }
}







?>