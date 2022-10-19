<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>

	<style type="text/css">
		.red{
			color: red;
		}
	</style>

	

	

	<br>

	<div align="center" style="width:600px">
		
			<form action="/test/view/login.php" target="_self" method="POST">
				<p><h2>Registration</h2></p>
				<table>
					<tr>
						<td>Name</td>
						<td>:</td>
						<td><input type="text" name="name" ><span class="red">*</span></td>
					</tr>

					<tr>
						<td>E-mail</td>
						<td>:</td>
						<td><input type="text" name="email" ><span class="red">*</span></td>
					</tr>

					<tr>
						<td>User Name</td>
						<td>:</td>
						<td><input type="text" name="username" ><span class="red">*</span></td>
					</tr>

					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="text" name="password" ><span class="red">*</span></td>
					</tr>

					<tr>
						<td>Confirm Password</td>
						<td>:</td>
						<td><input type="text" name="confirmpassword" ><span class="red">*</span></td>
					</tr>

					<tr>
						<td>Gender</td>
						<td>:</td>
						<td>
							<input type="radio" name="gender" value="Male" id="Male"> Male
							<input type="radio" name="gender" value="Female" id="Female">Female
							<input type="radio" name="gender" value="Other" id="Other">Other<span class="red">*</span>
						</td>
					</tr>

					<tr>
						<td>Date of Birth</td>
						<td>:</td>
						<td><input type="date" name="dob" ><span class="red">*</span></td>
					</tr>
				</table> <br>

				<input type="submit" name="Submit" value="Submit">
				<input type="reset" name="Reset" value="reset">

			</form>			
		
	</div>

	<br>

	
	
</body>
</html>