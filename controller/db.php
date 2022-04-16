<?php

$servername = "localhost";
$username ="root";
$password ="";
$datatable = "eschool";

$conn = new mysqli($servername, $username, $password, $datatable);


if($conn->connect_error){
    die("Error");
}
?>
    