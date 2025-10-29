<?php
include 'db_connect.php';

$keyword = $_GET['keyword'];

$sql = "SELECT * FROM users WHERE username LIKE '%$keyword%' OR fullname LIKE '%$keyword%'";
$result = $conn->query($sql);

$data = array();
while($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
$conn->close();
?>
