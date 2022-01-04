<?php
    header("Content-type: text/css; charset: UTF-8");
?>

*{
    font-family:monospace;
    margin: 0;
    padding: 0;
}

/*footer styling*/
#fc{
     background-color: rgb(24, 22, 20);
     display: flex;
     align-items: center;
     justify-content: center;
     position: fixed;
     bottom:0px;
     width: 100%;
}

/*index css*/
.container{
text-align: center;
color: aqua;
}


/*signup.php css*/
.signup{
display: flex;
align-items: center;
justify-content: center;
}

h3,h4{
    text-align: center;
}
.header-container{
    font-weight:bolder;
    font-size:16px;
}
#logo-messenger{
    font-size:25px
}

nav{
    display: flex;
    align-items: center;
    justify-content: center;
}

#msg{
    color:rgb(23, 128, 128);
}


/*style for login*/
.grid{
    height: 68vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.logo{
    margin-top: 20px;
}
.psi{
    margin-bottom: 40px;
    color: grey;
}
.sign{
    color: linen;
    border: none;
    width: 150px;
    background-color:rgb(68, 18, 35);
    transition: all 80ms;
}
.sign:hover{
    background-color: rgb(104, 39, 15);
    border: 2px solid orangered;
}
.sign:active{
    height: 20px;
    width: 100px;
    transform: rotate(360deg);
    background-color: rgb(83, 16, 44);
    border: 2px solid rgb(255, 0, 212);

}

#email{
    height: 50px;
    width: 300px;
    margin-bottom: 5px;
}

#password{
    height: 50px;
    width: 300px;
}
#label{
    margin: 30px auto;
}

/* stylying for signup btn*/
.signupbtn{
    color:whitesmoke;
    border: none;
    height: 40px;
    width: 80px;
    background-color:rgb(73, 19, 19);
    transition: all 500ms;
}
.signupbtn:hover{
    background-color: rgb(25, 18, 32);
}
.signupbtn:active{
color:aqua;
height: 40px;
width: 100px;
}

/* stylying for signup btn-div*/
.div-sign{
    text-align: center;
}

/*styling for input */
input{
    text-align: center;
    width: 250px;
    border: 2px solid grey;
    outline:none;
    transition: all 600ms;
}
input:focus{
    border: none;
    border: 2.5px solid rgb(218, 47, 166);
}

/* styling for forgetpwd text in loginpage*/
#forgpwd{
    text-align: center;
    transition: all 100ms;
}
#forgpwd:active{
    color:gold;
    transform: rotate(3deg);
}

/* styling for pwd show hide eye element*/
.eye{
    opacity: 0.5;
    cursor:help;
}
.show{
    opacity:1;
}


/* styling for freechatpage*/
.father-div{
    height:647;
    display: flex;
    flex-direction: row;
    align-items: center;
}

#sidebar-left{
    font-size:bold;
    color:pink;
    height:647;
    width:700px;
    background-color:rgba(36, 37, 42, 1);
    cursor:pointer;
}
ul li{
    color:violet;
    list-style-type: none;
    height:35px;
}


#post-content{
    margin-left:150px;
    margin-right:150px;
    height:647;
    box-shadow:2px 3px 2px 2px aliceblue;
    border-radius: 20px/5px;
    overflow:scroll;
    border:2px dashed;
}

#sidebar-right{

    color:wheat;
    height:647;
    width:1000px;
    background-color:rgba(36, 37, 42, 1);}

.profile-hidden-list{
    display:none;
}
.dropdown{
    
}
#greenbtn {
    margin-top:5px;
    border:none;
    height:20px;
    width:20px;
     font-size:large;
      background-color:green;
      border-radius:50px;
    }
    #active-user-name{
        font-weight:bolder;
        color:grey
    }