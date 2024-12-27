<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Debugging: Wyświetlenie przesyłanych danych
    var_dump($_POST);

    // Zapytanie SQL do pobrania hasła dla danego użytkownika
    $stmt = $pdo->prepare("SELECT passwd FROM clients WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Sprawdzenie, czy użytkownik istnieje i hasło jest poprawne
    if ($user) {
        if (password_verify($password, $user['passwd'])) {
            // Zaloguj użytkownika
            $_SESSION['username'] = $username;
            header('Location: welcome.php'); // Przekierowanie na stronę powitalną
            exit();
        } else {
            echo "<script>alert('Invalid username or password.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('User not found.'); window.history.back();</script>";
    }
} else {
    header('Location: index.html'); // Jeśli nie jest to POST, przekieruj do formularza logowania
}
?>
