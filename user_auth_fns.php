<?php
	function register($username,$email,$password){
		$conn=db_connect();
		if(!$conn)
			exit("Failed to connect to database!");
		$result=$conn->query("select * from user where username='".$username."'");
		if(!$result){
			throw new Exception('Could not execute query');
		}
		if($result->num_rows>0){
			throw new Exception("That username is taken");
		}

		$result=$conn->query("insert into user values ('".$username."',sha1('".$password."'),'".$email."')");
		if(!$result){
			throw new Exception("could not register you in database");
		}
		return true;
	}
	function login($username,$passwd){
        $conn=db_connect();
        if(!$conn)
            exit("Failed to connect to database!");
        $result=$conn->query("select * from user where username='".$username."' and passwd=sha1('".$passwd."')");
        if(!$result){
            throw new Exception('Could not execute query');
        }
        if($result->num_rows==0){
            throw new Exception("Go away!");
        }
        return true;
    }
    function check_valid_user(){
        if(isset($_SESSION['valid_user'])){
            echo "logged in as ".$_SESSION['valid_user']."<br />";
        }
        else{
            do_html_header('Problem:');
            echo 'You are not logged in.<br />';
            do_html_footer();
            exit();
        }
    }
?>