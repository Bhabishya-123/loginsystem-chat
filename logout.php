<?php

 //removing all the session variable created when users loggedin 
 //so that our users will be secure than redirecting to login page
    session_start();

      //1st step(i.e connection) done through config file
  include_once 'config/config.php';
  $query =  "DELETE FROM usersState WHERE uid = {$_SESSION['userId']};";
  mysqli_query($conn,$query);

    session_unset();
    session_destroy();
   
    include_once 'login.php';

?>