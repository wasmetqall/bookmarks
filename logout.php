<?php
require_once('bookmark_fns.php');
session_start();

$old_user=$_SESSION['valid_user'];
unset($_SESSION['valid_user']);
$result_dest=session_destroy();

do_html_header('Logging out');

if(!empty($old_user)){
    if($result_dest){
        echo 'Logged out.<br />';
        do_html_url('login.php','login');
    }
    else{
        echo 'could not log you out';
    }
}
else{
    echo "You were not logged in";
    do_html_url('login.php','login');
}
do_html_footer();
?>