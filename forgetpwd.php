<?php
include_once'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover-Password</title>
     <style>
         *{
             font-family:monospace;
             margin:0px;
             box-sizing:border-box;
             color:silver
         }
         #main-div{
              position: relative;
              height:500px;
              display:flex;
              flex-direction:column;
              justify-content:center;
              align-items:center;
         }
          #fp-box{
              background-color:rgba(36, 37, 42, 1);
              display:flex;
              flex-direction:column;
              justify-content:center;
              align-items:center;
              height:400px;
              width:500px;
              box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
          }
          h4{
              color:pink
          }
          button{
              background-color:rgba(14, 64, 92, 0.45);;
              border:none;
              height: 30px;
              width:50px;
              margin-top:4px;
              transition:all 300ms;
          }
 
        button:hover{
            color:wheat;
             background-color:rgba(64, 64, 42, 0.45);
             width: 60px;
            }
            button:active{
             color:blue;
            }

          input{
              outline:none;
              color:brown;
              height: 40px;
              width:300px;
              text-align:center;
          }
          #lp{
            background-color:rgba(43, 14, 27, 0.871);
            font-family:san-serif;
            transition: linear 200ms;
          }
 
          #lp:hover{
            background-color:rgba(44, 84, 32, 9.45);
             color:white;
            }
            #lp:active{
            background-color:rgba(69, 34, 82, 9.45);
             margin-right:20px;
             color:gold;
            }
         
     </style>
</head>
<body>
    <div id="main-div">

    <div id=fp-box>
    <h4>Find Your Account</h4> <br>
    <hr>
    <p>Get Verification code on:</p>
    <input type="email" placeholder="Your Email">
  <button type="submit" >send</button>
                <br>
  <p>Get Verification code on:</p>
  <input type="number" placeholder="Your Mobilenumber">
  <button type="submit" >send</button>
  <hr>
   </div>

<div>
    <button style="width:200px" id="lp">Login Page</button>
    <button style="width:200px" id="sp">Signup </button>
</div>
 
    </div>

<script src="js/forgetpwd.js"></script>

</body>
</html>

<?php
include_once'includes/footer.php';
?>

