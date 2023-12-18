<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border: 1px solid grey;
        }
    </style>
</head>
<body>
    <h2>Pencarian Mahasiswa</h2>
    <form action="#" method="POST">
        <input type="text" name="nama" placeholder="input nama Mahasiswa">
        <input type="submit" value="cari" name="cari">
    </form>
    <?php
        if(isset($_POST["cari"])){
            $nama = $_POST["nama"];

            require_once "/backend/database_con.php";
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
    
</body>
</html>