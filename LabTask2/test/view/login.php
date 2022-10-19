<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<style type="text/css">
		.red{
			color: red;
		}
	</style>

	<div align="center" style="width:400px">
		<?php
		if (isset($message)) {
		 	echo "$message";
		 } 
		?>
		<form action="/test/controller/logincontrol.php" target="_self" method="POST">
			
				<table>
					<tr>
						<td>User Name :</td>
						<td><input type="text" name="username" ><span class="red">*</span></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="password" name="password"><span class="red">*</span></td>
					</tr>		
				</table>
				<hr>
				<input type="submit" name="login" value="login">
				 <a href=" /test/view/registration.php">Need to registration?</a>
		
		</form>		
	</div>

	<br>

	

</body>
</html>