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

        <!-- <div class="mid_content" style="flex-direction: row;">
            <div class="sign-log-container">
                <div class="sign-log-title">Are you a user?</div>
                <div class="log-in-container">
                    <input type="text" placeholder="Username or Email" class="input-field">
                </div>
                <div class="log-in-container">
                    <input type="password" placeholder="Password" class="input-field">
                </div>
                
                <div class="log-in-button">Log in</div>
            </div>
        </div> -->
        <div class="mid_content" style="flex-direction: row;">
            <div class="sign-log-container">
                <div class="sign-log-title">Are you a user?</div>
                <form action="login.php" method="POST" id="loginForm" class="form-container">
                    <div class="log-in-container">
                        <input type="text" placeholder="Username or Email" class="input-field" id="username" name="username" required>
                    </div>
                    <div class="log-in-container">    
                        <input type="password" id="password" name="password" placeholder="Password" class="input-field" required>
                    </div>
                    <div class="forgot-text">Forgot password</div>
                    <button class="log-in-button" type="submit">Login</button>
                </form>
                <div id="message"></div>
            </div>
        </div>

        <div id="footer"></div>
        <script src="./header.js"></script>
    </div>
</body>
</html>

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