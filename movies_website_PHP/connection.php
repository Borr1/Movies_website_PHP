<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "flakkes";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){

    die("connection failed!");
}

?>