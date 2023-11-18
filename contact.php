<?php

$servername = "localhost";
$username = "root";
$password ="";
$db = "db";

$con = mysqli_connect($servername,$username,$password, $db);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO info (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

if ($con->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
