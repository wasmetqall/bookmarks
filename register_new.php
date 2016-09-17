<?php
	require_once('bookmark_fns.php');
	$email=$_POST['email'];
	$username=$_POST['username'];
	$passwd=$_POST['passwd'];
	$passwd2=$_POST['passwd2'];

	session_start();
	echo "1";
	try{
		if(!filled_out($_POST)){
			throw new Exception('Not filled out correctly!');
		}
		if(!valid_email($email)){
			throw new Exception('That is not a valid email address!');
		}
		if($passwd!==$passwd2){
			throw new Exception('The password do not match!');
		}
		if((strlen($passwd)<6) || (strlen($passwd)>16)){
			throw new Exception('The password must be between 6 and 16 characters!');
		}

		register($username,$email,$passwd);
		$_SESSION['valid_user']=$username;

		do_html_header('Registraion successful');
		echo 'Your registration was successful!';
		do_html_url('member.php','Go to members page');
		do_html_footer();
	}
	catch (Exception $e){
		do_html_header('Problem:');
		echo $e->getMessage();
		do_html_footer();
		exit("failed");
	}

?>