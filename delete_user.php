<?php
include 'db_connect.php';

$id = $_POST['id'];

$query = "DELETE FROM users WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    echo "success";
} else {
    echo "error";
}
?>
