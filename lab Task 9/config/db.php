<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "datafilter";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$connect)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>