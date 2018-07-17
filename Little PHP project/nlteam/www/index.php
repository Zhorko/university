<!DOCTYPE html>
<html>
<head>
	<title>NL TEAM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>	
	<style type="text/css">
	body
	{
		background-image:url(фон2.jpg);
		background-attachment: fixed;
	}
	button
	{
		background-color: Transparent;
		background-repeat:no-repeat;
		border: none;
		overflow: hidden;
		outline:none;
		transition-duration: 0.1s;
		color: red;
		font-size: 130%;
		font-family: "Lucida Console", Monaco, monospace;
		
	}
	button:hover
	{
		transition-duration: 0.4s;
		color: yellow;
	}
	#team_buttons 
	{
		position:relative;
		transition: .5s ease;
		top: 30px;
		left: 20px;
	}
	#aus_buttons 
	{
		position:relative;
		transition: .5s ease;
		left:200px;
	}
	#sign_buttons 
	{
		position:relative;
		transition: .10s;
		top: 10%;
		left: 20px;
	}
	#cont_buttons 
	{
		position:relative;
		transition: .10s;
		text-allign: left;
		border: 2px solid #4CAF50;
		border-radius: 8px;
		text-decoration: none;
	}
	#cont_buttons:hover
	{
		color: #44d6ff;
		cursor:not-allowed;
		background-color: #006610;
		border: 2px solid #006610;
	}
	
	#p_sp
	{
		font-family: 'Amethysta';
		font-size: 20px;
		color: #ffe5f7;
		line-height: 12px;
		right: 10px;
		top: 200px;
		padding-left: 10px;
		text-allign: right;
	}
	#p_2
	{
		font-family: 'Amethysta';
		font-size: 20px;
		color: #ffe5f7;
		line-height: 12px;
		padding-left: 1100px;
		padding-top: 15px; 
	}
	a:hover 
	{
		color: hotpink;
		text-decoration: none;
	}
	a
	{
		color: white;
	}
	a:visited 
	{
		color: dark red;
		text-decoration: none;
	}
	.sign_link
	{
		color: grey;
		background-color: Transparent;
		border: 2px solid #44d6ff;
	}
	.sign_link:hover
	{
		color: #ff740a;
		text-decoration: none;
		border: 2px solid #09b9ff;
	}
	</style>
</head>
<body>

	<div class="btn-group d-flex s2 container-fluid" role="group" >
		<button id="cont_buttons" class="btn btn-lg w-7 btn-link">Contact us</button>
		<p id="p_2">Register to know more about NL Team</p>
		<button id="sign_buttons" class="btn btn-primary btn-link btn-lg w-7 sign_link" onclick="location.href='authorization.php'">Sing In</button>
		<button id="sign_buttons" class="btn btn-primary btn-link btn-lg w-7 sign_link" onclick="location.href='registration.php'">Registration</button>
		
	</div>
	
	<div id="team_buttons">
		<p><button>Team Roaster</button>
			
		<p id="p_sp"></p>
		<p id="p_sp"><a href="https://steamcommunity.com/id/Zhork9/">		★ Zhork9	</a></p>
		<p id="p_sp"><a href="https://steamcommunity.com/id/ultrosenpai">	★ Ultr0		</a></p>
		<p id="p_sp"><a href="https://steamcommunity.com/id/DanuMD">		★ SportMan	</a></p>
		<p id="p_sp"><a href="https://steamcommunity.com/id/vovkagp">		★ VGP		</a></p>
		<p id="p_sp"><a href="https://steamcommunity.com/id/estenz">		★ Estenz	</a></p>
	</div>
	
	
</body>
</html>