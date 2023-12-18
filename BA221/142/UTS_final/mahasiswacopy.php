<?php
$title ="Profile mahasiswa";
include 'head.php';
include 'navbar.php';
include 'backend/database_con.php';
            $query = "SELECT * FROM `mahasiswa` AS m JOIN tabel_jurusan as j ON m.kode_jurusan = j.kode_jurusan";
            $exec = mysqli_query($conn, $query);
                while($data = mysqli_fetch_assoc($exec)){
                        // $haha[] =$data;
                        $array[] = 
                          [
                              "nim" => $data["nim"],
                              "nama"=> $data["nama_mhs"],
                              "jurusan"=> $data["nama_jurusan"], 
                              "gender"=> $data['gender'] == 1 ? "Laki-Laki" : "Perempuan",
                              "alamat"=> $data["alamat"],
                              "no_hp"=> $data["no_hp"],
                              "email"=> $data["email"],
                             "foto"=>$data["foto"]
                              
                          ]
                          ;
                }

                $json = json_encode($array);
                echo $json . "<hr>";



                $array = json_decode($json);
?>

<!-- <body class="d-flex flex-column min-vh-100 bg-dark text-white">
<div class="container-fluid">
<?php 
foreach ($array as $row){
  ?>

<div class="d-flex ">
  <div class="card me-5 " style="max-width: 500px;">
    <div class="row g-0">
      <div class="col-md-4 ">
        <img src="foto/<?= $row->foto ?>" class="img-fluid rounded-start" alt="Profile pic" style="height:100%;">
      </div>
      <div class="col-md-8 ">
        <div class="card-body">
          <p class="card-text">NIM : <?= $row->nim ?></p>
          <p class="card-text">Nama Mahasiswa : <?= $row->nama ?></p>
          <p class="card-text">Nama Jurusan :  <?= $row->jurusan ?></p>
          <p class="card-text">Gender : <?= $row->gender ?></p>
          <p class="card-text">Alamat : <?= $row->alamat ?></p>
          <p class="card-text">No Handphone : <?= $row->no_hp ?></p>
          <p class="card-text">Email : <?= $row->email ?></p>
        </div>
      </div>
    </div>
  </div>
  
  <?php
  }
  ?>
  </div>
</div>

</body> -->

<body class="d-flex flex-column min-vh-100 bg-dark text-white">

<h2>Pencarian Mahasiswa</h2>
    <form action="#" method="POST">
        <input type="text" name="nama" placeholder="input nama Mahasiswa">
        <input type="submit" value="cari" name="cari">
    </form>
    <?php
        if(isset($_POST["cari"])){
            $nama = $_POST["nama"];

            require_once "backend/database_con.php";
            $data = $mhs->getDataMhs($nama);
            ?>
            <hr>
            <table style="width : 100%">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                </tr>
                <?php foreach( $data as $row){ ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td><?= $row[4] ?></td>
                    <td><?= $row[5] ?></td>
                    <td><?= $row[6] ?></td>
                </tr>
                <?php } ?>
            </table>
            <?php
        }
    ?>
<br>
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-center">
            <?php
            foreach ($array as $row) {
            ?>
                <div class="card mb-4 me-4" style="max-width: 700px; " >
                    <div class="row g-0" style="height: 100%;">
                        <div class="col-md-4" >
                            <img src="foto/<?= $row->foto ?>" class="img-fluid rounded-start" style="width:100%; height:100%;" alt="Profile pic">
                        </div>
                        <div class="col" >
                            <div class="card-body d-flex flex-column" style="width: 400px;" >
                              <div style="widht : 900px;">

                                <p class="card-text">NIM : <?= $row->nim ?></p>
                                <p class="card-text">Nama Mahasiswa : <?= $row->nama ?></p>
                                <p class="card-text">Nama Jurusan : <?= $row->jurusan ?></p>
                                <p class="card-text">Gender : <?= $row->gender ?></p>
                                <p class="card-text">Alamat : <?= $row->alamat ?></p>
                                <p class="card-text">No Handphone : <?= $row->no_hp ?></p>
                                <p class="card-text">Email : <?= $row->email ?></p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    
    

</body>





