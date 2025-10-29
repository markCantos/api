<?php
include 'db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];

$sql = "INSERT INTO users (username, password, email, fullname) VALUES ('$username', '$password', '$email', '$fullname')";

if ($conn->query($sql)) {
    echo "success";
} else {
    echo "error";
}
$conn->close();


?>
