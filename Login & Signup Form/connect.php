<?php

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$cpassword = filter_input(INPUT_POST, 'cpassword');
if(!empty($email))
{
	if(!empty($password))
	{
		if(!empty($cpassword))
		{
			if($password === $cpassword)
			{
				$host = "localhost";
				$dbusername = "root";
				$dbpassword = "";
				$dbname = "signup";

				//Create connection
				$conn = new mysqli ($host , $dbusername , $dbpassword , $dbname);

				if(mysqli_connect_error())
				{
					die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
				}
				else
				{
					$sql = "INSERT INTO registration (email, password, cpassword) values ('$email','$password','$cpassword')";
					if ($conn->query($sql))
					{
						echo "New record is inserted successfully. <a href='http://localhost/food%20project/food%20project%20elders/home.php'>Click here</a> to go to the next page.";
					}
					else
					{
						echo "Error: ".$sql ."<br>".$conn->error;
					}
					$conn->close();
				}
			}
			else
			{
				echo "Passwords are not matching";
				die();
			}
		}
		else
		{
			echo "Password should not be empty";
			die();
		}
	}
	else
	{
		echo "Password should not be empty";
		die();
	}
}
else
{
	echo "Email should not be empty";
	die();
}
?>