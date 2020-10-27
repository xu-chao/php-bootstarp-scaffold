<?php
    
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {
        $sqlshow = "SELECT COUNT(*) FROM problemdetail WHERE ProblemType = '投影'";
    }
   $count_touyin = mysqli_query($db,$sqlshow);
   $total_touyin=mysqli_fetch_row($count_touyin);
   echo $total_touyin[0];
