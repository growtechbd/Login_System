<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login Form</title>
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
		}

		.login-form label {
			display: block;
			margin-bottom: 10px;
			font-size: 18px;
		}

		.login-form input {
			display: block;
			padding: 5px;
			font-size: 16px;
			border-radius: 5px;
			border-color: #000;
			width: 100%;
		}

		.login-form input[type="submit"] {
			cursor: pointer;
		}

		.form-group {
			margin-bottom: 20px;
		}

		.mt-20 {
			margin-top: 20px !important;
		}

	</style>
</head>
<body>
	<div class="login-form">
		<form action="dashboard.php" method="post">
			<div class="form-group">
				<label for="">Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Enter your name.." required>
			</div>
			<div class="form-group">
				<label for="">Mobile</label>
				<input type="text" name="mobile" class="form-control" placeholder="Enter your mobile.." required>
			</div>
			<div class="form-group">
				<label for="">E-mail</label>
				<input type="email" name="email" class="form-control" placeholder="Enter your email.." required>
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="pass" class="form-control" placeholder="Enter your pass.." required>
			</div>
			<div class="form-group">
				<label for="">Roll</label>
				<input type="number" name="roll" class="form-control" placeholder="Enter your roll.." required>
			</div>
			<div class="form-group">
				<input type="submit" name="login" class="mt-20" value="Login">
			</div>
		</form>
	</div>
</body>
</html>