
<?php
//giving access to the user profile only if user_session['name'] is set 
//else other will be redirect to the login page with error message as they are not authorised user
   session_start();
   if(isset($_SESSION['userName'])){
         echo "we will back soon...";
   }else{
       header('location:login.php?error=UnAuthorisedAcess-LoginFirst');
   }
   ?>


