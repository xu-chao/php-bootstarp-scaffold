<?php 

session_start();
$cityname = $_SESSION['cityname'];

include "db_config.php";

$db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
if(mysqli_connect_error())
{    
  echo "连接失败";  
  exit;
}
else if(empty($_SESSION['user']))
{
  echo "error!";
  header('location: ../index.html');
}
else if ($_SESSION['permission'] == 1 || $_SESSION['permission'] == 4) {
  $sql = "select * from city";
}
else
{
  $sql = "select * from city where CityName = '".$cityname."'";
  //$sql = "select * from city";
}
  $result = $db->query($sql);
  $data="";
  $array= array();
  class City{
    public $value;
  }
  while($row = $result->fetch_row()){
    $city=new City();
    @$city->value = $row[1];
    $array[]=$city;
  }
  $data=json_encode($array);
  echo $data;
