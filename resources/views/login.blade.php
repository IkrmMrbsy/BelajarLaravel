<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Css/Login.css">
</head>
<body>
    
    <div class="container" id="loginForm">
        <h2>Login</h2>
        <form class="login-form" method="post" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="login">Login</button>
            </div>
        </form>
        <p class="login-message" id="loginMessage"></p>
        <p><a href="#registerForm" onclick="showRegisterForm()">Don't have an account?</a></p>
    </div>
    
    <div class="container" id="registerForm" style="display: none;">
        <h2>Register</h2>
        <form class="register-form" method="post" action="">
            <div class="form-group">
                <label for="newUsername">New Username:</label>
                <input type="text" id="newUsername" name="newUsername" required>
            </div>
            <div class="form-group">
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" required>
            </div>
            <div class="form-group">
                <button type="submit" name="register">Register</button>
            </div>
        </form>
        <p class="register-message" id="registerMessage"></p>
        <p><a href="#loginForm" onclick="showLoginForm()">Back to Login</a></p>
    </div>
    <script src="Js/Login.js"></script>    
    </body>
</html>