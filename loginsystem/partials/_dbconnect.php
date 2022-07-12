<?php
//connecct to data database
$servername = "localhost";
$username =  "root";
$password = "";
$database  = "users";
//create a connection 
$conn  = mysqli_connect($servername, $username, $password, $database);
//Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect : " . mysqli_connect_error() . "<br>");
} else {
    // echo "connection was successful <br>";
}
?>