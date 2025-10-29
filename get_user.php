<?php
header('Content-Type: application/json');
include 'db_connect.php'; 


if (!$conn) {
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}


$id = isset($_GET['id']) ? intval($_GET['id']) : (isset($_POST['id']) ? intval($_POST['id']) : 0);

if ($id <= 0) {
    echo json_encode(["error" => "Invalid or missing user ID"]);
    exit;
}


$query = "SELECT id, fullname, email, username FROM users WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo json_encode(["error" => "Query failed: " . mysqli_error($conn)]);
    exit;
}


if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    echo json_encode($user);
} else {
    echo json_encode(["error" => "User not found"]);
}

mysqli_close($conn);
?>
