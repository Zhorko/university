<?php
	$email = $_POST["email"];
	$password = $_POST["password"];
	if(isset($_POST["done"])){
		if((!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))||($_POST["email"]!=$_POST["confirm_email"]))
			echo "Email is incorrect";
		if(($_POST["password"] == "")||($_POST["password"]!= $_POST["confirm_password"]))
			echo "<br>Password is incorrect";
		else
		{
			$mysqli = new mysqli ("localhost", "root", "", "mybase");
			$mysqli->query ("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('$email', '".md5($password)."', '".time()."')");
			$mysqli->close();
			header("Location:profile.php");
		}
	}	
?>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>	
</head>
<body>
	<div class="container">
		<form role="form" name="Form" action="" method="post">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
			</div>
			<div class="form-group">
				<label for="confirm_email">Confirm email</label>
				<input type="email" class="form-control" id="confirm_email" name="confirm_email" placeholder="Enter your email" />
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" />
			</div>
			<div class="form-group">
				<label for="confirm_password">Confirm password</label>
				<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter your password" />
			</div>
			<input type="submit" class="btn btn-info" value="Done" name="done"/>
		</form>
	</div>
</body>
</html>