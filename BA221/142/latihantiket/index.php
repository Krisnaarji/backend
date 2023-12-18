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

    <div class="container mt-3 p-5 border border-success">
        <h2>Estimasi Wisatawan</h2>
            <form action="#" method="POST">
                <div class="mb-3 mt-3">
                    <label for="inputname">Nama Group Wisata :</label>
                    <input class="form-control" type="text" id="inputname" placeholder="Input Nama Group" name="name_group" required>
                </div>

                <div class="mb-3 mt-3">
                    <label for="inputalamat">Jumlah Wisatawan :</label>
                    <input class="form-control" type="number" id="inputalamat" placeholder="Masukkan jumlah wisatawan" name="jumlah_wisatawan" required>
                </div>

                <div class="mb-3 mt-3">
                    <label for="inputpaket">Jenis paket :</label>
                    <select class="form-select" aria-label="Default select example" id="inputpaket" name="paket" required>
                        <option value="Umum" selected>Umum</option>
                        <option value="VIP">VIP</option>
                        <option value="VVIP">VVIP</option>
                    </select>
                </div>

                <div class="mb-3 mt-3">
                    <label for="">Tiket Pesawat :</label>
                    <br>
                    <input type="radio" name="tiket" value="Reguler"> Reguler
                    <input type="radio" name="tiket" value="pulang_pergi"> Pulang-Pergi
                </div>

                <div class="container mt-2">
                    <button type="submit" class="btn btn-primary" name="hitung" id="btn">Hitung</button>
                </div>
        </form>
      </div>



        <?php
            if(isset($_POST['hitung'])):
            
        ?>
        <div class="container mt-3 p-5 border border-danger" id="result">
            

        <?php
            $groupname = $_POST['name_group'];
            $wisatawan = $_POST['jumlah_wisatawan'];
            $paket = $_POST['paket'];
            $tiket = $_POST['tiket'];
            if($paket === "Umum"){
                $hrg_paket = 300000 * $wisatawan;
            }
            elseif($paket === "VIP"){
                $hrg_paket = 500000 * $wisatawan;
            }
            elseif($paket === "VVIP"){
                $hrg_paket = 800000 * $wisatawan;
            }
            else{
                echo "Paket tidak tersedia";
            }

            if($tiket === "Reguler"){
                $hrg_tiket = 900000 * $wisatawan;
            }
            elseif($tiket === "pulang_pergi"){
                $hrg_tiket = 1500000 * $wisatawan;
            }

            $total = $hrg_paket + $hrg_tiket;

        ?>
        
            <h2 class="text-center">### <?=$groupname ?> ###</h2>
            <br>
            <h4> Jumlah Wisatawan :  <?= $wisatawan ?> </h4>
            <br>
            <h4>Total Biaya Paket : Rp. <?= number_format ($hrg_paket) ?> </h4> 
            <h4 class="card-text">Total Biaya Tiket : Rp. <?= number_format($hrg_tiket) ?></h4>
            <br>
            <h2 class="card-text"> Total seluruh biaya : Rp. <?= number_format($total)  ?></h2>
        </div>

        <?php endif;

        ?>


</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 