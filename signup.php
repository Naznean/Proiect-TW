<!DOCTYPE hmtl>
<html>
<head>
	<title>Create New Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootsrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootsrapcdn.com/bootsrap/3.3.7/js/bootsrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	<div class="signup-form">
		<form action="" method="post>
			<div class="form-header">
				<h2><font color= #D55135>Sign Up</font></h2>
				<p>fill this then chat</p>
			</div>
			<div class="form-group">
				<label><font color= #D55135>Username</font></label>
				<input type="text" class="form-control" name="user_name" placeholder="example: andrei"
				autocomplete="off" required>
			</div>
			<div class="form-group">
				<label><font color= #D55135>Password</font></label>
				<input type="password" class="form-control" name="user_pass" placeholder="Password"
				autocomplete="off" required>
			</div>
			<div class="form-group">
				<label><font color= #D55135>Email Address</font></label>
				<input type="email" class="form-control" name="user_email" placeholder="someone@site.com"
				autocomplete="off" required>
			</div>
			<div class="form-group">
				<label><font color= #D55135>country</font></label>
				<select class="form-control" name="user_country">
				<option disabled="">Select coutnry</option>	
				<option>Romania</option>
				</select>
			</div>
			<div class="form-group">
				<label><font color= #D55135>Gender</font></label>
				<select class="form-control" name="user_gender">
				<option disabled="">Select gender</option>	
				<option>Male</option>
				<option>Female</option>
				</select>
			</div>
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="
				#">Terms of use</a> &amp; <a href="#">Privacy Policy</label
			
			<div class="form-group">
				<button type="submit"  class="btn btn-primary btn-block btn-lg" name="sign_up">Sign up</button>
			</div>	
			<!--<?php //include("signup_user.php"); ?>-->
		</form>
		<div class="text-center small" style="color: #67428B;>Already have an account <a href="signin.php">Sign in here</a></div>
	</div>
</body>
</html>