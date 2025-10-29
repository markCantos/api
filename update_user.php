<?php
include 'db_connect.php';

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];

$query = "UPDATE users SET fullname='$fullname', email='$email' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    echo "success";
} else {
    echo "error";
}
?>
