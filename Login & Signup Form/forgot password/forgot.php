<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot.css">
    <title>Forgot Password</title>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <p>Enter your email address to reset your password.</p>
        <form id="forgotForm" method="post" action="resetemail.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="button" onclick="sendResetEmail()">Reset Password</button>
        </form>
        <div id="result"></div>
    </div>

    <script src="forgot.js"></script>
</body>
</html>