<?php
	function filled_out($form_vars){
		foreach ($form_vars as $key => $value) {
			if(!isset($key) || $value=='')
				return false;
			else 
				return true;
		}
	}
	function valid_email($address){
		return filter_var($address,FILTER_VALIDATE_EMAIL);
	}
?>