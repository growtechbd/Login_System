<?php

// DB Info
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "";

// Form Values
$user_name = $_POST['name'];
$user_mobile = $_POST['mobile'];
$user_email = $_POST['email'];
$user_roll = $_POST['roll'];
$user_pass = $_POST['pass'];

// Insert to DB
$db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$db_query = "INSERT INTO users_info (user_name, user_mobile, user_email, user_roll, user_pass) VALUES ('$user_name', '$user_mobile', '$user_email', '$user_roll', '$user_pass')";

mysqli_query($db_connect, $db_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

	<style>
		* {
			margin: 0;
			padding: 0;
			outline: 0;
			box-sizing: border-box;
			font-family: 'Roboto Mono'
		}
		
		body {
			background-color: orange;
			width: 100%;
			height: 100vh;
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
		}

		.login-form {
			padding: 30px 10px;
			background-color: #fff;
			border-radius: 10px;
			width: 400px;
			text-align: justify;
		}

		.mt-20 {
			margin-top: 20px !important;
		}

	</style>
</head>
<body>
	

	<div class="login-form">
		<h2>Welcome to the dashboard. Our system is under construction. Stay with us, we will come as soon as possible. Thank you.</h2>
	</div>
</body>
</html>