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
          $sql_city = "SELECT count(*) FROM city";
          $sql_park = "SELECT count(*) FROM park";
          $sql_touyin = "SELECT COUNT(*) FROM problemdetail WHERE ProblemType = '投影'";
          $sql_yinxiang = "SELECT COUNT(*) FROM problemdetail WHERE ProblemType = '音响'";
          $sql_dengguang = "SELECT COUNT(*) FROM problemdetail WHERE ProblemType = '灯光'";
          $sql_qita = "SELECT COUNT(*) FROM problemdetail WHERE ProblemType = '其他'";
    }
   $count_city=mysqli_query($db,$sql_city);
   $total_city=mysqli_fetch_row($count_city);
   $count_park=mysqli_query($db,$sql_park);
   $total_park=mysqli_fetch_row($count_park);
   $count_touyin=mysqli_query($db,$sql_touyin);
   $total_touyin=mysqli_fetch_row($count_touyin);
   $count_yinxiang=mysqli_query($db,$sql_yinxiang);
   $total_yinxiang=mysqli_fetch_row($count_yinxiang);
   $count_dengguang=mysqli_query($db,$sql_dengguang);
   $total_dengguang=mysqli_fetch_row($count_dengguang);
   $count_qita=mysqli_query($db,$sql_qita);
   $total_qita=mysqli_fetch_row($count_qita);