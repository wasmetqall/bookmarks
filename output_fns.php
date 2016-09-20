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
function do_html_url($URL,$text){
	?>
	<a href="<?php echo $URL; ?>"><?php echo $text;?> </a>
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
		<input type="text" name="passwd">
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
		<input type="text" name="passwd">
		<div>Confirm password</div>
		<input type="text" name="passwd2">
		<input type="submit" value="submit">
	</form>
	<?php
}
function display_user_urls($url_array){
	echo $url_array."this is display_user_urls";
}
function display_user_menu(){
	echo "this is display_user_menu";
}
function display_change_passwd_form(){
	?>
	<form action="change_passwd.php" method="post">
		<div>Old passsword:</div>
		<input type="text" name="old_passwd">
		<div>New password:</div>
		<input type="text" name="new_passwd">
		<div>Confirm new password</div>
		<input type="text" name="new_passwd2">
		<input type="submit" value="submit">
	</form>
	<?php
}
?>