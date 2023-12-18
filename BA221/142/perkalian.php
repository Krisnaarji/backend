<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>

    <h1>Perkalian 1 - 10</h1>

    <?php
        for($i=1; $i<=10; $i++){
            echo "<h5>Perkalian " . $i . "</h5> <br>";
            
            for($j=1; $j<=10; $j++){
                $hasil = $i * $j;
                echo $i . " x " . $j . " = " .$hasil . "<br>";
            }
        }
    ?>






    <h1>Perulangan</h1>
    <h4>FOR</h4>
    <?php
        for($i=1; $i<=100; $i++){
            echo $i . " ";
        }
    ?>

    <h1>LATIHAN</h1>
    <?php
        // for($i=1; $i<=10; $i++){
        //     for($j=1; $j<=10; $j++){
        //         if($i % 2 == 1){
        //             echo "<span style='color: red;'>".$i."adalah bilangan genap</span> <br>";
        //         }

        //         if($j % 2 == 0){
        //             echo $j . "<br>";
        //         }
        //     }
        // }
        for($i=1; $i<=10; $i++){
            if($i % 2 == 1){
                echo "<span style='color: red;'>".$i." adalah bilangan Ganjil</span> <br>";
            }
            else{
                echo "<span>".$i." adalah bilangan Genap</span> <br>";
            }
        }
    ?>
    <p style="color: red;"></p>


    <h1>Operator</h1>
    <h4>Oerator aritmatika</h4>
    <?php
        $x = 10;
        $y = 4;

        $a = $x + $y;
        echo"Penjumlahan :"."<br>";
        echo $x . " + " . $y . " = " . $a ."<br>";
        
        $b = $x - $y;
        echo"Pengurangan :"."<br>";
        echo $x . " - " . $y . " = " . $b ."<br>";
        
        $c = $x * $y;
        echo"Perkalian :"."<br>";
        echo $x . " x " . $y . " = " . $c ."<br>";

        $d = $x / $y;
        echo"Pembagian :"."<br>";
        echo $x . " : " . $y . " = " . $d ."<br>";

        $e = $x % $y;
        echo"Sisa bagi :"."<br>";
        echo $x . " % " . $y . " = " . $e ."<br>";
    ?>
    <br><br><br><br>
    <h1>LATIHAN</h1>
    
    <?php
        $nilai = 70;
        if($nilai > 85){
            echo "A";
        }
        elseif ($nilai >=70 && $nilai<=85) {
            echo "B";
        }
        elseif ($nilai >49 && $nilai<=69) {
            echo "C";
        }
        elseif ($nilai >=30 && $nilai<50) {
            echo "D";
        }
        else {
            echo"E";
        }

    ?>
    <br><br><br><br>

    <h1>LATIHAN</h1>
    <?php
        $matkul1= 70;
        $matkul2= 70;
        $matkul3= 70;
        $matkul4= 70;
        $matkul5= 70;


        $rata = ($matkul1 + $matkul2 + $matkul3 + $matkul4 + $matkul5) / 5 ;
        echo $rata . "<br>";

        switch($pass_grade=70){
            case $rata>=$pass_grade:
                echo "Selamat anda lolos ke tahap berikutnya";
            break;

            default;
            echo "Maaf anda tidak lolos";
        }
    ?>
</body>
</html>