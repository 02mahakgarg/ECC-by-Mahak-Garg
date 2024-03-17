<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="Elder Care Companion" content="416595200358-2d3skcs40e5sqjvprvfqrc7s61s0p2bt.apps.googleusercontent.com">
    <title>Document</title>
    <link rel="stylesheet" href="styleg.css">
    <style>

</style>
</head>
<body>
    <div class="box">
        <h2>Sign in</h2>
        <p>Use your Google Account</p>
        <form id="loginForm" method="post" action="googlelogin.php">
            <div class="inputBox">
                <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);" value="">
                <label>Username</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required onkeyup="this.setAttribute('value', this.value);" value="">
                <label>Password</label>
            </div>
            <input type="submit" name="sign-in" value="Sign In">
        </form>
        <!-- Add the Google Sign-In button -->
        <div class="g-signin2" data-onsuccess="onGoogleSignIn"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function onGoogleSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var googleUserData = {
                id: profile.getId(),
                name: profile.getName(),
                email: profile.getEmail(),
                imageUrl: profile.getImageUrl()
            };

            // Send the Google user data to the server using AJAX
            $.ajax({
                type: "POST",
                url: "login.php",
                data: { googleUserData: JSON.stringify(googleUserData) },
                success: function (response) {
                    console.log(response);
                    // Handle the server response as needed
                },
                error: function (error) {
                    console.log(error);
                    // Handle the error
                }
            });
        }
    </script>
</body>

</html>