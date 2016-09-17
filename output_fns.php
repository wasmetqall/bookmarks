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

function display_login_form(){
	?>
	<form action="member.php" method="post">
	<div>username:</div>
		<input type="text" name="username">
		<div>password:</div>
		<input type="text" name="password">
		<input type="submit" value="submit">
	</form>
	<?php
}
?>