<?php
include_once'includes/header.php';
?>
<link rel="stylesheet" href="style.php">
<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
<title>LogIn</title>
    <form class="grid" action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
        <div><img class="logo" src="./image/freechat.png" alt="" height="120px" ></div>
        <h2 class="psi"> <ins> Please login</ins></h2>
        <label class=""></label>
        <input type="email" id="email" placeholder="Email" name="email"  >
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" id="password" class="" placeholder="password" name="pwd"> <i class="fas fa-eye eye" id="eye"></i> <br>
        <script src="js/pwd-show-hide.js"></script>
        <button class="sign" type="submit" name="login" style="height:50px;"><b>Login</b></button>
        <br>
   <p  id="forgpwd"> <b> <a href="forgetpwd.php">forget password?</a> </b></p>

    </form> 
    

    

<?php
//this is also API but as it is placed in same file so it is not saved inside api folder
session_start();
  
 //1st step(i.e connection) done through config file
 include_once 'config/config.php';

if(isset($_POST['login'])){

    if(empty($_POST['email'])){
           echo "<h4>Enter email</h4>";
    }

    if(empty($_POST['pwd'])){
        echo "<h4>Enter password</h4>";
 }

$email = $_POST['email'];
$password = $_POST['pwd'];

$sql ="SELECT * FROM  users WHERE usersEmail='{$email}';";
$result = $conn->query($sql);


if($result->num_rows==1){
    $row = $result->fetch_assoc();

    if(password_verify($password, $row['usersPwd'] )){
        // ----------------^^^^^^^^^^^^^^^^^^--^^^^^^^^^^^^^^^^
        //                  Plain text pwd      hashed pwd from db  
        $_SESSION['userName'] = $row['usersName'];
        $activeUser = $row['usersName'];
        $_SESSION['userId'] = $row['usersId'];
        $uid = $row['usersId'];

        //query to insert user to active list table when user loggedin
        $query =  "INSERT INTO usersState (uid,activeUsers) VALUES ('{$uid}','{$activeUser}'); ";
        mysqli_query($conn,$query);


    header("location: freechat.php");
            // put exit after a redirect as header() does not stop execution
            exit;}else{
                echo "<h4>Incorrect password</h4>";//as user get inside if statem if userEmail matched
            }


}else{
    if($_POST['email']){ //it means it will run if email field is filled
    echo "<h4>(unavailable) please signup first</h4>";
    }
}


//last step for connection close
  $conn->close();
}//end of 1st ifstatement

?>

<?php
include_once'includes/footer.php';
?>


<!-- <script> not worked----!
    const element = document.querySelector('button[type='submit']');
    element.addEventListener('click',function(){
        return false;
    })
</script> -->