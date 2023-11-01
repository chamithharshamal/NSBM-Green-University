<?php
$servername = "localhost";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "university";


$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO students (name, email, password) VALUES ('$name', '$email', '$password')";

$conn->close();
?>
