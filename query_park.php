<?php

  include "db_config.php";

  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {
        $sqlshow = "SELECT count(*) FROM park";
    }
   $count = mysqli_query($db,$sqlshow);
   $total=mysqli_fetch_row($count);
   echo $total[0];
   mysqli_close($db);
?>