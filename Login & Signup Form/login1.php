<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	//Database connection
	$conn = new mysqli("localhost", "root", "", "signup");
	if($conn->connect_error)
	{
		die("Failed to connect :" .$conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("select * from registration donators where email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0)
		{
			$data = $stmt_result->fetch_assoc();
			if($data['password'] === $password)
			{
				echo "<h2>Login Successful.</h2>  <a href='http://localhost/food%20project/food%20project%20donators/home1.php'><b>Click here</b></a> to go to the next page.";
			}
			else
			{
				echo "<h2>Invalid Email or Password</h2";
			}
		}
		else
		{
			echo "<h2>Tnvalid Email or Password</h2>";
		}
	}
?>
