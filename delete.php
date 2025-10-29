<?php
include 'db_connect.php';

$username = $_POST['username'];

$sql = "DELETE FROM users WHERE username='$username'";
if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "error";
}
mysqli_close($conn);
?>
