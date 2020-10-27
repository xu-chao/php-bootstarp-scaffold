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
          $sqlshow = "
          SELECT COUNT(PDID) AS mount
          FROM problemdetail  
          WHERE CONCAT(YEARWEEK(problemdetail.PDTime))=CONCAT(YEARWEEK(CURDATE()))  AND problemdetail.ProblemType='音响'";
    }
   $count = mysqli_query($db,$sqlshow);
   $total=mysqli_fetch_row($count);
   echo $total[0];
   mysqli_close($db);
?>