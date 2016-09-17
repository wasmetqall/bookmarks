<?php
	function filled_out($form_vars){
		foreach ($form_vars as $key => $value) {
			if(isset($key) && $value!=='')
				return true;
			else 
				return false;
		}
	}
	function valid_email($address){
		return preg_match('^[a-zA-Z0-9_\.\-]+@[a-zA-z0-9\-]+\.[a-zA-z0-9\-\.]+$',$address);
	}
?>