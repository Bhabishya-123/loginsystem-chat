
<?php

//1st step(i.e connection) done through config file
include_once '../config/config.php';

    $sql ="SELECT * FROM  usersState WHERE status='online';";
    $result = $conn->query($sql);

//if and only we use while loop every row of database get printed else only 1st row printed
    while($row = $result->fetch_assoc()){
        echo "<button id='greenbtn'>"."</button>"."<span id='active-user-name'>".$row['activeUsers']."</span>"."<br>";
    
    }


?>

