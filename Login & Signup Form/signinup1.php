<!DOCTYPE html>

    <html lang="en">
    <head>

        <title> Responsive Login and Signup Form </title>

            
            <?php include 'links.php'  ?>

            <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form method = "post" action = "login1.php">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input"  name = "email" id="email">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password"  name = "password" id="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="http://localhost/food%20project/Login%20&%20Signup%20Form/forgot%20password/forgot.php" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <input type="submit" value = "Login" style="background-color: blue; color: white;">
                        </div> <!--location.href='file:///C:/Users/dell/Desktop/food%20project/food%20project%20elders/home1.html'-->
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div> 
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="http://localhost/food%20project/Login%20&%20Signup%20Form/login%20with%20facebook/loginfb.php" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span> Login with Facebook </span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="http://localhost/food%20project/Login%20&%20Signup%20Form/login%20with%20google/loging.php" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form method = "post" action = "connect1.php">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input" name = "email" id="Email">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" class="password" name = "password" id="createpassword">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="password" name = "cpassword" id="confirmpassword">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <input type="submit" value = "SignUp" style="background-color: blue; color: white;">
                        </div> <!--onclick="location.href='file:///C:/Users/dell/Desktop/food%20project/food%20project%20elders/home1.html'"-->
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="http://localhost/food%20project/Login%20&%20Signup%20Form/login%20with%20facebook/loginfb.php" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="http://localhost/food%20project/Login%20&%20Signup%20Form/login%20with%20google/loging.php" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>
        </section>

        <!-- JavaScript -->
        <script src="js/script.js"></script>
    </body>
</html>

