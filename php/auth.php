<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="../styles/reg.css">
</head>
<body class="layout">
		<div class="center auth-form-body mt-3">
			<form action="./signin.php" method="post" id="mar">
				<label for="login_field">Username or Email</label><br>	
				<input type="text" id="login_field" name="login" placeholder="Your login ..."><br>
				<label for="password">Password</label><br>
				<input type="password" id="password" name="password" placeholder="Your password ..."><br>
				<input type="submit" name="enter" value="Ввійти" class="btn btn-primary btn-block">
			</form>

		</div>
</body>
</html>