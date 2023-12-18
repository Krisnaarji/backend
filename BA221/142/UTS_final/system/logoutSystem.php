<?php
session_start();
session_unset();
session_destroy();

header("Location: ../index.php");
$myfile = fopen("system/file.txt", "a");
fwrite($myfile, "$waktu - ".$_SESSION['username']." : Logout \n");
exit();