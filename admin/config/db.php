<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "cornerstone";

$conn = mysqli_connect($hostname,$username,$password,$database);

if (!$conn){
    echo "<script>window.alert('Connection to Database Failed!');</script>";
}
?>