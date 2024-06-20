
<?php
    $servername= "127.0.0.1";
    $username="root";
    $password="";
    $dbname = "school2";

    $db = mysqli_connect($servername,$username,$password,$dbname);
    if (!$db){
        die("error contact admin !". mysqli_connect_error());
    }
    $adminpassword = "Toptoptop3";
    $amountfromdatabase = 99;
?>