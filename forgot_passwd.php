<?php
require_once('bookmark_fns.php');
do_html_header("resetting password");
$username = $_POST['username'];

try {
    notify_passwd($username);
    echo "Your new password has been emailed to you";
}
catch (Exception $e) {
    echo 'Your password could not be reset - please try again later.';
}
do_html_url('login.php', 'Login');
do_html_footer();

?>