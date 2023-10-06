<?php
//connect database connection with PDO
$servername = "localhost";
$port= "4306";
$username = "root";
$password = "";
$dbname = "quanlythuvien";
$conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;

?>