
<?php

function emptyInputSignup($name, $email,  $username, $pwd,$rpwd){
    $result;
    if (empty($name) ||empty($email) ||empty($username) ||empty($pwd) ||empty($rpwd) ) {
                 $result = true;   
    }
     else{
                 $result = false;
     }
                 return $result;
}

function invalidUID($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) { /*This function(algor) searches the string for pattern,
                                            and returns true if the pattern exists otherwise returns false.*/
                 $result = true;   
    }
     else{
                 $result = false;
     }
                 return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {//this return true if var is proper email(built in func)
                 $result = true;   
    }
     else{
                 $result = false;
     }
                 return $result;
}


function pwdMatch($pwd,$rpwd) {
    $result;
    if ($pwd !== $rpwd) {
                 $result = true;   
    }
     else{
                 $result = false;
     }
                 return $result;
}




function createUser($name,$email,$username,$pwd){
    
  
//Here,include_once of config.php not work so i just paste its code below
//1st step for database php connection
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "logindatastore";

//Before we can access data in the MySQL database, we need to be able to connect to the server i.e php
$conn = new mysqli($serverName,$dBUsername,$dBPassword,$dBName );

// Check connection
if(!$conn){
    die("Connection failed: ".$conn->connect_error());
}

   //2nd step run sql query
   //inserting data from table to database 
   //this will make user send pwd to hashed pwd and save to database in hashed form
   $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);

   //using prepare statement for preventing injection
   $sql = $conn->prepare("INSERT INTO users (usersName,usersEmail,usersUid,usersPwd) VALUES (?,?,?,?)");

   $sql->bind_param('ssss',$name,$email,$username,$hashedpwd);
   $sql->execute();
 
//after saving user data to database redirecting user to add page
header("location: ../login.php?userSuccessfullycreated!");

   //3rd step closing connection
   $conn->close();
   $sql->close(); //closing prepare statement

}


