<?php 
// database Connection
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'cornerstone';


$conn = mysqli_connect($hostname, $username, $password, $database);

// check for connection error
if(!$conn){
    echo "Connection was not established";
}

?>