<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elder Care Companion</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('Backimg.jpeg');
      background-size: cover;
      background-position: center;
      font-family: Arial, sans-serif;
      
     
    }

    #welcome-section {
      text-align: center;
      padding: 100px 0;
    }

    h1 {
      font-size: 3em;
      color: #0a0a0a; /* Adjust text color based on your background */
    }

    .animated-text {
      display: inline-block;
      animation: fadeInUp 1s ease-in-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    #login-options {
      text-align: center;
      margin-top: 50px;
    }

    button {
      padding: 10px 20px;
      font-size: 1em;
      margin: 0 10px;
      cursor: pointer;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
    }
  </style>
  <script>
    function welcome()
    {
        window.open("http://localhost/food%20project/Login%20&%20Signup%20Form/signinup.php");
    }
    function welcome1()
    {
        window.open("http://localhost/food%20project/Login%20&%20Signup%20Form/signinup1.php");
    }
</script>

</head>
<body>

  <div id="welcome-section">
    <h1 class="animated-text">Welcome to</h1><br>
    <h1 class="animated-text" style="font-size: 5em;">Elder Care Companion</h1>
  </div>

  <div id="login-options">
    <button class="animated-text" onclick="welcome()">Login as Elders</button>
    <button class="animated-text" onclick="welcome1()">Login as Donators</button>
    <button class="animated-text" onclick="welcome()">Login as Admin</button>
  </div>
</body>
</html>