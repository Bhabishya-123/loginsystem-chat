<head>
  <link rel="stylesheet" href="../style.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
</head>

<div class="header-container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" id='logo-messenger' href="#" style='color:violet'>Freechat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Friends</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Groups</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="" type="search" placeholder="Search freechat" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search </button>
      </form>
    </div>
  </div>
</nav>
</div>


<div class="father-div">


<span id='sidebar-left'>
<br>
<h3>Menu-features</h3>
<br> <br> <br> <br>
<ul>
  <li>Friends</li>
  <li>Groups</li>
  <li>Marketplace</li>
  <li>Memories</li>
  </ul>
  <hr>
<br> <br>
  <div class="dropdown">
    <img src="../image/pp.jpg" alt="" style="border-radius:50px;" height="50px" width="50px">
    <span id="profile-name">
    <?php
                  //accessing session variable that is stored in web server created in login.php
                 session_start();
                  echo $_SESSION['userName'] ;
                ?>
    </span>
    <br>

    <div class="profile-hidden-list">

      <ul>
        <li>Profile</li>
        <li>Setting</li>
        <li> <a href=""  id='lgout'>Logout</a> </li> <script src="../js/logout.js"></script>
      </ul>
    </div>
  </div>

<script>
  //toggle - dropdown menu when user clicked at their pic-name
  const target = document.querySelector(".profile-hidden-list");
  const profileName = document.querySelector("#profile-name");
  
  profileName.onclick = () => {
    if(target.style.display=='none'){
      target.style.display = 'block';
    }
    else{
      target.style.display = 'none';
    }
}
</script>


</span>



<span id="post-content">
    <h1 style="text-align:center; color:green;">Welcome <?php
                  echo $_SESSION['userName'] ; // adding session username to welcome the user when user loggedin
                ?>
                   !!</h1>
    <p style="color:brown;">freechat web application is currently under a construction.
                    So, please stay calm and preebook your private chat space. 
                    You and your private gosships are warmly welcomed and secure 
                    from our advanceMYSQLI database. You can't have any complain with 
                    our teams and websites.</p>

</span>




<span id='sidebar-right'>
  <br> <br>
<h3>Active-friends</h3>
<br>
<ul>
<li id='on'> 
  <?php
   include_once '../api/addactiveuser.php';
   ?>
</li>
</ul>
</span>


</div> 




    <!-- Option 1: Bootstrap Bundle with Popper for onclick dropdown function -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>


