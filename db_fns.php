<?php
	function db_connect(){
		$result=new mysqli('localhost','root','qwer1234','bookmarks');
		if(!$result->connect_errno){
			quit("Failed to connect to database,".$result->connect_errno.$result->connect_error);
		}
		return $result;
	}
?>