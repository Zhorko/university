<?php
	if($_POST["email"] == "")
	{
		echo "Enter email. <a href='authorization.php'>correct</a>";
	}
	else
	{
		header("index.php");
	}
?>