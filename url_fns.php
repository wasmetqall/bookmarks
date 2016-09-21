<?php
function get_user_urls($username){
    $conn=db_connect();
    $result=$conn->query("select bm_URL from bookmark where username='".$username."'");
    if(!$result){
        return false;
    }
    $url_array=array();
    for($i=1;$row=$result->fetch_row();++$i){
        $url_array[$i]=$row[0];
    }
    return $url_array;
}
function add_bm($new_bm){
    $username=$_SESSION['valid_user'];
    $conn=db_connect();

    if(!$conn){
        throw new Exception('Failed to connect the database');
    }
    $result1=$conn->query("select * from bookmark where username='".$username."' and bm_URL='".$new_bm."'");
    if(!$result1){
        throw new Exception('Failed to request the data');
    }
    if($result1->num_rows==1){
        throw new Exception('The bm exists!');
    }

    $result2=$conn->query("insert into bookmark values ('".$username."','".$new_bm."')");
    if(!$result2){
        throw new Exception("Failed to insert the new bookmark");
    }
    return true;
}
?>