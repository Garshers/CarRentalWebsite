<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root"; // Zmień na swoją nazwę użytkownika bazy danych
$password = ""; // Zmień na swoje hasło bazy danych
$dbname = "wypozyczalnia";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user data from the database
$loggedInUsername = $_SESSION['username'];
$sql = "SELECT * FROM clients WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $loggedInUsername);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();
} else {
    echo "User data not found.";
    exit();
}

// Close the database connection
$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in/ Log in - Car rental</title>
    <link rel="shortcut icon" href="Images/icon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="header_footer.css" />
    <link rel="stylesheet" href="main_Page.css" />
    <link rel="stylesheet" href="signLog_Page.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
</head>
<!-- <body>
    <h1>Witaj, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>To jest strona tylko dla Ciebie!</p>
    <a href='Log.php'>Wyloguj</a>
    
</body> -->

<body style="background-color: #F9F8FB;"> 
    <div id="home-page">

        <div class="background-slideshow"></div>

        <div id="header"></div>

        <div class="sign-log-container">
    <div class="sign-log-title" style="margin: 0;"><?php echo htmlspecialchars($userData['username']); ?> details</div>
    <div class="log-in-container">
        <input type="text" value="<?php echo htmlspecialchars($userData['first_name']); ?>" class="input-field" readonly>
    </div>
    <div class="log-in-container">
        <input type="text" value="<?php echo htmlspecialchars($userData['last_name']); ?>" class="input-field" readonly>
    </div>
    <div class="log-in-container">
        <input type="text" value="<?php echo htmlspecialchars($userData['username']); ?>" class="input-field" readonly>
    </div>
    <div class="log-in-container">
        <input type="text" value="<?php echo htmlspecialchars($userData['phone']); ?>" class="input-field" readonly>
    </div>
    <div class="log-in-container">
        <input type="text" value="<?php echo htmlspecialchars($userData['country']); ?>" class="input-field" readonly>
    </div>
    <div class="log-in-container">
        <input type="text" value="<?php echo htmlspecialchars($userData['city']); ?>" class="input-field" readonly>
    </div>
    <div class="log-in-container">
        <input type="text" value="<?php echo htmlspecialchars($userData['street']); ?>" class="input-field" readonly>
    </div>
    <div class="log-in-container">
        <input type="text" value="<?php echo htmlspecialchars($userData['document_number']); ?>" class="input-field" readonly>
    </div>
    <div class="log-in-container">
        <input type="text" value="<?php echo htmlspecialchars($userData['driver_license_number']); ?>" class="input-field" readonly>
    </div>
    <div class="log-in-container">
        <input type="text" value="<?php echo htmlspecialchars($userData['e_mail']); ?>" class="input-field" readonly>
    </div>
</div>


        <div id="footer"></div>
        <script src="./header.js"></script>
    </div>
</body>
</html>

<script>
    window.addEventListener('scroll', function () {
        const header = document.getElementById('header');
        if (window.scrollY > 0) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>
