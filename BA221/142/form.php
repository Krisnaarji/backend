<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<body>
    <div class="container p-5 my-5 bg-dark text-white">
        <h1>Selamat Datang</h1>
    </div>

    <div class="container mt-3">
        <h2>Input Biodata</h2>
            <form action="simpan.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="inputname">Nama</label>
                    <input class="form-control" type="text" id="inputname" placeholder="Masukkan Nama Lengkap" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="inputalamat">Alamat</label>
                    <input class="form-control" type="text" id="inputalamat" placeholder="Masukkan alamat" name="alamat">
                </div>
                <div class="mb-3 mt-3">
                    <label for="inputhp">No HP</label>
                    <input class="form-control" type="number" id="inputhp" placeholder="Masukkan nomor hp" name="nohp">
                </div>
                <div class="mb-3 mt-3">
                    <label for="inputemail">Email</label>
                    <input class="form-control" id="inputemail" type="email" placeholder="Masukkan email" name="email">
                </div>

                <div class="mb-3 mt-3">
                    <label for="inputemail">Foto</label>
                    <input class="form-control" id="inputemail" type="file" placeholder="Masukkan email" name="foto">
                </div>

                <div class="container mt-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </form>
      </div>


</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 