
<?php


if(isset($_POST['submit'])){
   
    //ACCESSING all the input value from its name(key) given in form through its post associative array
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $rpwd = $_POST['rpwd'];

    
    //1st step(i.e connection) done through config file
    require_once '../config/config.php';
    require_once 'functions.inc.php';

//error handler done by using diff functions

//1st checking if any input field is left empty by the user
if(emptyInputSignup($name, $email,  $username, $pwd,$rpwd) !==false){
    header("location: ../signup.php?error=emptyInput");
    exit();
}

//2nd checking if user entererd uid is appropriate or not
if(invalidUID($username) !==false){
    header("location: ../signup.php?error=invalidusername");
    exit();
}

//3rd checking if user entererd email is proper or not
if(invalidEmail($email) !==false){
    header("location: ../signup.php?error=invalidemail");
    exit();

}
//4th checking if user entererd password match repeated pwd
if(pwdMatch($pwd,$rpwd) !==false){
    header("location: ../signup.php?error=pwdnotmatch");
    exit();
}


//finally creating user in database incase all above condition got true
createUser($name,$email,$username,$pwd);
}//if end

else{
    /* This is to redirect the browser */
    header("location: ../signup.php");
    exit("Hey there is some errors!");
}//else end
