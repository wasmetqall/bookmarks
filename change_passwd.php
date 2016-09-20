<?php
require_once('bookmark_fns.php');
session_start();
do_html_header('Changing password');

$old_passwd=$_POST['old_passwd'];
$new_passwd=$_POST['new_passwd'];
$new_passwd2=$_POST['new_passwd2'];

try{
    check_valid_user();
    if(!filled_out($_POST)){
        throw new Exception('Not filled out correctly!');
    }
    if($new_passwd!=$new_passwd2){
        throw new Exception('The password do not match!');
    }
    if((strlen($new_passwd)<6) || (strlen($new_passwd)>16)){
        throw new Exception('The password must be between 6 and 16 characters!');
    }
    change_passwd($_SESSION['valid_user'],$old_passwd,$new_passwd);
    echo 'Password changed';
}
catch (Exception $e){
    echo $e->getMessage();
}
display_user_menu();
do_html_footer();
?>