<?php
  session_start();
  $cityname = $_SESSION['cityname'];
  @$city=$_REQUEST['city'];
  @$park=$_REQUEST['park'];

  include "db_config.php";

  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else if($_SESSION['permission'] == 1 || $_SESSION['permission'] == 4) 
    {
        if(!empty($city)&&!empty($park))
        {
          $sqlshow = "SELECT count(*),project.ProjectName FROM problemdetail,project,park,city 
           WHERE problemdetail.ProjectName = project.ProjectName 
           AND problemdetail.ParkName = park.ParkName AND project.ParkName = park.ParkName 
           AND problemdetail.CityName = city.CityName AND park.CityName = city.CityName
           AND park.ParkName = '$park' GROUP BY project.ProjectName";
        }
        else if (!empty($city))
        {
          $sqlshow = 
          "SELECT count(*),park.ParkName FROM problemdetail,project,park,city 
           WHERE problemdetail.ProjectName = project.ProjectName 
           AND problemdetail.ParkName = park.ParkName AND project.ParkName = park.ParkName 
           AND problemdetail.CityName = city.CityName AND park.CityName = city.CityName 
           AND park.CityName = '$city' GROUP BY park.ParkName";
        }
        else if(!empty($park)){
          echo "<script>alert('输入非法，请仔细核查！！！');history.go(-1);</script>";
        }
        else
        {
          $sqlshow = "SELECT count(*),city.CityName FROM problemdetail,project,park,city 
                      WHERE problemdetail.ProjectName = project.ProjectName 
                      AND problemdetail.ParkName = park.ParkName AND project.ParkName = park.ParkName 
                      AND problemdetail.CityName = city.CityName AND park.CityName = city.CityName
                      GROUP BY city.CityName";
        }
    }else
    {
      if(!empty($city)&&!empty($park))
        {
          $sqlshow = "SELECT count(*),project.ProjectName FROM problemdetail,project,park,city 
           WHERE problemdetail.ProjectName = project.ProjectName 
           AND problemdetail.ParkName = park.ParkName AND project.ParkName = park.ParkName 
           AND problemdetail.CityName = city.CityName AND park.CityName = city.CityName
           AND park.ParkName = '$park' GROUP BY project.ProjectName";
        }
        else if (!empty($city))
        {
          $sqlshow = 
          "SELECT count(*),park.ParkName FROM problemdetail,project,park,city 
           WHERE problemdetail.ProjectName = project.ProjectName 
           AND problemdetail.ParkName = park.ParkName AND project.ParkName = park.ParkName 
           AND problemdetail.CityName = city.CityName AND park.CityName = city.CityName 
           AND park.CityName = '$city' GROUP BY park.ParkName";
        }
        else if(!empty($park)){
          echo "<script>alert('输入非法，请仔细核查！！！');</script>";
        }
        else
        {
          echo "<script>alert('输入非法，请仔细核查！！！');</script>";
        }
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