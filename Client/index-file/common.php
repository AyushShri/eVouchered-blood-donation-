<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blood_donation";

$conn1 = new mysqli($servername, $username, $password, $database,"3308") or die($mysqli_error($conn));
if (!isset($_SESSION['email'])) 
{  
session_start();
}

?>