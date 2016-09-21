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
	foreach ($url_array as $value) {
		do_html_url($value,$value);
		echo "<br/>";
	}
}
function display_user_menu(){
	echo "</br>";
	do_html_url('member.php','home');
	do_html_url('add_bm_form.php','Add BM');
	do_html_url('delete_bms.php','Delete BM');
	do_html_url('change_passwd_form.php','Change password');
	do_html_url('recommend.php','Recommend');
	do_html_url('logout.php','Logout');
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
function display_forgot_passwd_form(){
	?>
	<form action="forgot_passwd.php" method="post">
		<div>Enter you username</div>
		<input name="username" type="text">
		<input type="submit" value="submit">
	</form>
	<?php
}function display_add_bm_form(){
	?>
	<form action="add_bms.php" method="post">
		<div>New bookmark:</div>
		<input name="new_bm" type="text" value="http://">
		<input type="submit" value="add bookmark">
	</form>
	<?php
}

?>