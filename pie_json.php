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
    $sqlshow = "SELECT count(*),city.CityName FROM problemdetail,project,park,city 
                      WHERE problemdetail.ProjectName = project.ProjectName 
                      AND problemdetail.ParkName = park.ParkName AND project.ParkName = park.ParkName 
                      AND problemdetail.CityName = city.CityName AND park.CityName = city.CityName
                      GROUP BY city.CityName";
    }
    else
    {
    $sqlshow = 
          "SELECT count(*),park.ParkName FROM problemdetail,project,park,city 
           WHERE problemdetail.ProjectName = project.ProjectName 
           AND problemdetail.ParkName = park.ParkName AND project.ParkName = park.ParkName 
           AND problemdetail.CityName = city.CityName AND park.CityName = city.CityName
           AND park.CityName = '$cityname' GROUP BY park.ParkName";
    }
  $result = $db->query($sqlshow);
  $data="";
  $array= array();
  class City{
    public $U_ID;
    public $city;
  }
  while($row = $result->fetch_row()){
    $city=new City();
    @$city->U_ID = $row[0];
    @$city->city = $row[1];
    $array[]=$city;
  }
  $data=json_encode($array);
  echo $data;
?>