<?php
include 'config.php';
include '../models/model.php';

function getAccAdmin ($email, $pword) {
    $sql = "SELECT * FROM tbl_admin Where password = $pword AND email = '".$email."'  ";
    $queryResult = mysql_query($sql);
    if (!$queryResult) {
        echo 'Could not run query: ' . $sql . mysql_error();
        exit;
    }
    $seletedItem = mysql_fetch_array($queryResult);
    $item = new User();
    $item->id = $seletedItem['id'];
    $item->name = $seletedItem['name'];
    $item->email = $seletedItem['email'];
    $item->password = $seletedItem['password'];

    return $item;
}


function emailExist($email) {
    $sql = "SELECT * FROM tbl_user Where email = '".$email."'";
    $queryResult = mysql_query($sql);

    if (!$queryResult) {
        echo 'Error: ' . $sql . mysql_error();
        return -1;
    }

    if (mysql_num_rows($queryResult) > 0)
        return  1;
    else
        return -1;
}

?>