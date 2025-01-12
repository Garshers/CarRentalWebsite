<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wypozyczalnia";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("B³¹d po³¹czenia: " . $conn->connect_error);
}

$type = isset($_GET['type']) ? $_GET['type'] : '';

$sql = "SELECT DISTINCT brand FROM cars WHERE category = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $type);
$stmt->execute();
$result = $stmt->get_result();

$brands = [];
while ($row = $result->fetch_assoc()) {
    $brands[] = $row['brand'];
}

echo json_encode($brands);

$conn->close();
?>
