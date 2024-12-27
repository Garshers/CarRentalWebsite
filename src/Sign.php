<!DOCTYPE html>
<html lang="en">

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

<body style="background-color: #F9F8FB;"> 
    <div id="home-page">

        <div class="background-slideshow"></div>

        <div id="header"></div>

        <div class="mid_content" style="flex-direction: row;">
            <div class="sign-log-container">
                <div class="sign-log-title" style="margin: 0;">Your are trying to sign in</div>
                <div class="sign-log-title" style="margin:0 0 20px;font-size:16px;">When creating new account we require your personal data. Please fill your data below. Doing so will give you the ability to rent your car in less than 2min everytime you want!</div>
                <form action="Sign.php" method="POST" class="form-container">
                    <div class="log-in-container">
                        <input type="text" name="first_name" id="name" placeholder="Name" class="input-field" required>
                    </div>
                    <div class="log-in-container">
                        <input type="text" name="last_name" placeholder="Surname" class="input-field" required>
                    </div>
                    <div class="log-in-container">
                        <input type="text" name="username" placeholder="Username" class="input-field" required>
                    </div>
                    <div class="log-in-container">
                        <input type="password" name="passwd" placeholder="Password" class="input-field" required>
                    </div>
                    <div class="log-in-container">
                        <input type="text" name="phone" placeholder="Phone number" class="input-field" required>
                    </div>
                    <div class="log-in-container">
                        <input type="text" name="country" placeholder="Country" class="input-field" required>
                    </div>
                    <div class="log-in-container">
                        <input type="text" name="city" placeholder="City" class="input-field" required>
                    </div>
                    <div class="log-in-container">
                        <input type="text" name="street" placeholder="Street" class="input-field" required>
                    </div>
                    <div class="log-in-container">
                        <input type="text" name="document_number" placeholder="Doc number" class="input-field" required>
                    </div>
                    <div class="log-in-container">
                        <input type="text" name="driver_license_number" placeholder="Driving license number" class="input-field" required>
                    </div>
                    <div class="log-in-container">
                        <input type="text" name="e_mail" placeholder="Email address" class="input-field" required>
                    </div>
                    <button type="submit" class="log-in-button">Sign Up</button>
                </form>
            </div>
        </div>

        <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "wypozyczalnia";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve and validate form data
            $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
            $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
            $username = mysqli_real_escape_string($conn, $_POST['username']); 
            $passwd = mysqli_real_escape_string($conn, $_POST['passwd']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $country = mysqli_real_escape_string($conn, $_POST['country']);
            $city = mysqli_real_escape_string($conn, $_POST['city']);
            $street = mysqli_real_escape_string($conn, $_POST['street']);
            $document_number = mysqli_real_escape_string($conn, $_POST['document_number']);
            $driver_license_number = mysqli_real_escape_string($conn, $_POST['driver_license_number']);
            $e_mail = mysqli_real_escape_string($conn, $_POST['e_mail']);

            // Walidacja numeru telefonu (tylko cyfry, np. minimum 7 i maksimum 15 znaków)
            if (!preg_match('/^[0-9]{7,15}$/', $phone)) {
                die("Numer telefonu jest nieprawidłowy.");
            }

            // Walidacja adresu e-mail
            if (!filter_var($e_mail, FILTER_VALIDATE_EMAIL)) {
                die("Adres e-mail jest nieprawidłowy.");
            }

            // Sprawdzenie długości hasła (np. minimum 8 znaków)
            if (strlen($passwd) < 8) {
                die("Hasło musi mieć co najmniej 8 znaków.");
            }

            // Hash the password
            $hashed_password = password_hash($passwd, PASSWORD_DEFAULT);

            // Użycie prepared statements, aby uniknąć SQL injection
            $stmt = $conn->prepare("INSERT INTO clients (first_name, last_name, username, passwd, phone, country, city, street, document_number, driver_license_number, e_mail) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssss", $first_name, $last_name, $username, $hashed_password, $phone, $country, $city, $street, $document_number, $driver_license_number, $e_mail);

            
            if ($stmt->execute() === TRUE) {
                // Store user info in session
                $_SESSION['username'] = $username; // Save username or user ID in session
                header("Location: welcome.php"); // Redirect to welcome page
                exit(); // End script after redirect
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();
        ?>

        <div id="footer"></div>
        <script src="./header.js"></script>

    </div>
</body>
</html>


<script>
    document.getElementById("userForm").addEventListener("submit", function(event) {
    const phone = document.querySelector("input[name='phone']").value;
    
    // Example validation: check if phone number is numeric
    if (isNaN(phone)) {
        alert("Phone number should be numeric.");
        event.preventDefault(); // Prevent form submission
    }
    // Add further validations as needed
});
</script>