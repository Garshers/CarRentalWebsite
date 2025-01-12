<?php
$host = 'localhost'; // Zmień, jeśli baza danych jest na innym serwerze
$dbname = 'wypozyczalnia';
$username = 'root'; // Zmień na swoje dane
$password = ''; // Zmień na swoje dane

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
