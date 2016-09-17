<?php
function do_html_header($title){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title><?php echo $title;?></title>
	</head>
	<body>
	<?php
}

function do_html_footer(){
	?>
	</body>
	</html>
	<?php
}
function display_site_info(){
	?>
	<h1>SOMETHING HERE</h1>
	<?php
}

function display_login_form(){
	?>
	<form action="member.php" method="post">
	<div>Username:</div>
		<input type="text" name="username">
		<div>Password:</div>
		<input type="text" name="password">
		<input type="submit" value="submit">
	</form>
	<a href="register_form.php">Not a member?</a>
	<a href="forgot_form.php">Forgot your password?</a> 
	<?php
}

function display_register_form(){
	?>
	<form action="register_new.php" method="post">
		<div>Email:</div>
		<input type="text" name="email">
		<div>Username:</div>
		<input type="text" name="username">
		<div>Password:</div>
		<input type="text" name="password1">
		<div>Confirm password</div>
		<input type="text" name="password2">
		<input type="submit" value="submit">
	</form>
	<?php
}
?>