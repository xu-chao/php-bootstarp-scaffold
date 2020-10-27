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
    $sqlshow = "SELECT * FROM near_week_index_wuhu";
    }
  $result = $db->query($sqlshow);
  $data="";
  $array= array();
  class Mount{
    public $mount;
  }
  while($row = $result->fetch_row()){
    $mount=new Mount();
    @$mount->mount = $row[0];
    $array[]=$mount;
  }
  $data=json_encode($array);
  echo $data;
?>