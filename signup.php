<?php
include_once'includes/header.php';
?>

<title>SignUp</title>
<br> <br> <br> 

<h3 style='color:brown'> <ins> Please signup</ins></h3>

<div class="signup">
<form action="includes/signup.inc.php" method="post"> <br>
    <input type="text" name="name" placeholder="fullname"  required="required" style="height:37px;">  <br> <br>
    <input type="text" name="email" placeholder="email" required="required" style="height:37px;"> <br> <br>
    <input type="text" name="uid" placeholder="username"  required="required" style="height:37px;"> <br> <br>
    <input type="password" name="pwd" placeholder="password"  required="required" style="height:37px;"> <br> <br>
    <input type="password" name="rpwd" placeholder="repeat password"  required="required" style="height:37px;"> <br> <br>
    <div class="div-sign">
    <button type="submit" class="signupbtn" name="submit" >signup</button> <br> <br>
    </div>
 
</form>
</div>

<?php

include_once'includes/footer.php';
?>

