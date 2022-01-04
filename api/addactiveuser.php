<?php

//1st step(i.e connection) done through config file
include_once '../config/config.php';

if($_SESSION['userId']){
    $uid = $_SESSION['userId'];
    $sql ="SELECT * FROM  usersState WHERE uid='{$uid}';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

include_once 'activeUsers.php';
?>