<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate the email (you may add additional validation)

    // Generate a unique token (you may use more secure methods)
    $token = bin2hex(random_bytes(32));

    // Store the token in the database or any storage mechanism
    // For simplicity, we'll store it in a session variable for now
    session_start();
    $_SESSION['reset_token'] = $token;

    // Send the reset link via email
    require ('PHPMailer/PHPMailer.php');
    require ('PHPMailer/Exception.php');

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'mahakgarg3379@gmail.com'; // Replace with your Gmail email
    $mail->Password = '12j@nu@ry2002'; // Replace with your Gmail password

    $mail->setFrom('mahakgarg3379@gmail.com', 'Mahak Garg');
    $mail->addAddress($email);

    $mail->Subject = 'Password Reset';
    $mail->Body = "Click the following link to reset your password: http://localhost/food%20project/reset_password.php?token=$token";
    
    if ($mail->send()) {
        echo "Password reset link sent to your email.";
    } else {
        echo "Error sending email: " . $mail->ErrorInfo;
    }
}
?>
