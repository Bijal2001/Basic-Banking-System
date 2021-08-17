<?php
$server="localhost";
$username="root";
$password="";

$conn = mysqli_connect($server, $username, $password, "bank");

if (!$conn){
    die("Unable to connect to the database due to the following error: ".mysqli_connect_error());
}
?>