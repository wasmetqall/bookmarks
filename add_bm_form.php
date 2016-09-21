<?php
require_once('bookmark_fns.php');
session_start();

if(isset($_SESSION['valid_user'])) {

    do_html_header("Add bookmarks");
    echo "logged in as ".$_SESSION['valid_user'];
    display_add_bm_form();
    display_user_menu();
    do_html_footer();
}
else{
    echo "You were not logged in";
}
?>