<?php
require_once('bookmark_fns.php');
session_start();

$new_bm=$_POST['new_bm'];
do_html_header('adding bookmarks');

try{
    check_valid_user();
    if(!filled_out($_POST)){
        throw new Exception('Form not completely filled out.');
    }
    if(strstr($new_bm,'http://') === false){
        $new_bm='http://'.$new_bm;
    }
    if(!fopen($new_bm,'r')){
        throw new Exception('Not a valid URL.');
    }

    add_bm($new_bm);
    echo 'bookmark added';

    if($url_array=get_user_urls($_SESSION['valid_user'])){
        display_user_urls($url_array);
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
display_user_menu();
do_html_footer();
?>