<!DOCTYPE html>
<html>
<head>
	<title>Jquey Validation</title>
	<style>
		.alert{
			color: red;
		}
	</style>
</head>
<body>
<form action="Jquery.php" method="POST" id="form">
	<table>
		<tr>
			<td>First Name</td>
			<td><input type="text" id="first_name">
			<span class="alert" id="first_name_error"></span></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" id="last_name">
			<span  class="alert" id="last_name_error"></span></td>
		</tr>
		<tr>
			<td>Email Address</td>
			<td><input type="email" id="email_address">
			<span  class="alert"  id="email_error"></span></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" id="password">
			<span  class="alert" id="password_empty"></span></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" id="confirm_password">
			<span  class="alert" id="password_mis_match"></span></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="submit" id="btn"></td>
		</tr>


	</table>

</form>

<script src="jquery-3.4.1.js" ></script>
<script src="form-validation.js"></script>
</body>
</html>