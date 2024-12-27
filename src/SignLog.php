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
                <div class="sign-log-title">Choose your next move</div>
                <div class="spec-container" onclick="window.location.href='Log.php';">Log in</div>
                <div class="spec-container" onclick="window.location.href='Sign.php';">Sign in</div>
                <div class="forgot-text">Forgot password</div>
            </div>
        </div>

        <!-- <div class="mid_content">
            <div class="container">
                <h2>Login</h2>
                <form action="login.php" method="POST" id="loginForm">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    
                    <button type="submit">Login</button>
                </form>
                <div id="message"></div>
            </div>
            
            <script>
                // Optional: JavaScript for client-side validation or messages
                document.getElementById('loginForm').addEventListener('submit', function(event) {
                    // You can add additional checks here
                    const username = document.getElementById('username').value;
                    const password = document.getElementById('password').value;
        
                    if (username === '' || password === '') {
                        event.preventDefault();
                        document.getElementById('message').innerText = 'Please fill in all fields.';
                    }
                });
            </script>

        </div> -->
        
        <div id="footer"></div>
        <script src="./header.js"></script>

    </div>
</body>
</html>