<?php
include 'db_connect.php';
$result = mysqli_query($conn, "SELECT * FROM users");
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>
