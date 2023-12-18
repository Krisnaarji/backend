<?php

$serverName = 'localhost';
$username = "root";
$password = "";
$db_name = "anjayuts";

$conn = mysqli_connect($serverName, $username, $password, $db_name);

if (!$conn) {
    echo '<script>window.location.href="custom-404-page.php";</script>';
    die();
}
class database {
    protected $con;
    public function __construct() {
        $this->con = mysqli_connect("localhost","root","","anjayuts");
    }
}

class mahasiswa extends database {
    public function __construct() {
        parent::__construct();
    }

    function getDataMhs($nama) {
        $query = mysqli_query($this->con,"SELECT * FROM mahasiswa WHERE nama_mhs like '%$nama%'");
        $data = mysqli_fetch_all($query);
        return $data;
    }
}

$mhs = new mahasiswa();

?>