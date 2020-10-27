<?php
  include "db_config.php";

  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else {
    $sqlshow = "SELECT CityName FROM city";
    }
  $result = $db->query($sqlshow);
  $data="";
  $array= array();
  class City{
    public $cityname;
  }
  while($row = $result->fetch_row()){
    $city=new City();
    @$city->cityname = $row[0];
    $array[]=$city;
  }
  $data=json_encode($array);
  echo $data;
?>