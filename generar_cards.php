<?php
$host = 'sql210.infinityfree.com';
$db = 'guias';
$user = 'if0_37315282';
$pass = 'MAGI020601';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Conexión fallida: ' . $conn->connect_error);
}

$sql = 'SELECT * FROM guias';
$result = $conn->query($sql);

$guides = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $guides[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($guides);

$conn->close();
?>
