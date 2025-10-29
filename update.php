<?php
include 'db_connect.php';

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];

$sql = "UPDATE users SET username='$username', email='$email', fullname='$fullname' WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "error";
}
?>
