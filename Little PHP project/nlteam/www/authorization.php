<?php
	$email = $_POST["email"];
	$password = $_POST["password"];
	if(isset($_POST["done"])){
		function func($result_set){
			if(mysqli_num_rows($result_set)==1)
			{
				header("Location:profile.php");
			}
			else
			{
				echo "incorrect email or password";
			}
		}
		$mysqli = new mysqli ("localhost", "root", "", "mybase");
		$mysqli->query ("SET NAMES 'utf8'");
		$result_set = $mysqli->query ("SELECT * FROM  `users` WHERE login='$email' AND password='".md5($password)."'");
		func($result_set);
		$mysqli->close();
	}	
?>
<html>
<head>
	<title>Authorization</title>
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
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" />
			</div>
			<button type="button" class="btn btn-success" onclick="location.href='registration.html'">registration</button>
			<input type="submit" class="btn btn-info" value="Done" name="done"/>
		</form>
	</div>
</body>
</html>