<?php
function db_connect(){
    $result = new mysqli('localhost', 'root', '', 'bookmarks');
    if ($result->connect_errno) {
        exit("Failed to connect to database," . $result->connect_errno . $result->connect_error);
    }
    return $result;
}

?>