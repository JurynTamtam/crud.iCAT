<?php
include_once 'connect.php';
    $con = new mysqli("localhost","root","","db_reg");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $con->set_charset("utf8");


//$host = "localhost";
//$username = "bsitrdye_gela29";
//$password = "nonchalant@123";
//$db_name = "bsitrdye_gela_form";

//$connection = new mysqli($host, $username, $password, $db_name);
//session_start();

?>
