<?php
  session_start();
  $cityname=$_SESSION['cityname'];

  include "db_config.php";

  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {        
    $sqlshow = "SELECT * FROM query_index_project WHERE CityName = '$cityname'";
    }
  $result = $db->query($sqlshow);
  $data="";
  $array= array();
  class Mount{
    public $project;
    public $mount;
  }
  while($row = $result->fetch_row()){
    $mount=new Mount();
    @$mount->project = $row[0];
    @$mount->mount = $row[1];
    $array[]=$mount;
  }
  $data=json_encode($array);
  echo $data;
?>