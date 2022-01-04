
<?php
session_start();
if(isset($_SESSION['userName'])){
     header('location:freechat/messenger.php?authorised-user');
}else{
    header('location:login.php?unauthorised-acess-login-first');
}
?>
