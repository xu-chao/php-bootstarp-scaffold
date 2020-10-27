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
    $sqlshow = "SELECT ProblemType,COUNT(*) FROM problemdetail GROUP BY ProblemType";
    }
    else
    {
    $sqlshow = "SELECT ProblemType,COUNT(*) FROM problemdetail WHERE CityName = '$cityname' GROUP BY ProblemType";
    }
  $result = $db->query($sqlshow);
  $data="";
  $array= array();
  class MontnMount{
    public $typename;
    public $mount;
  }
  while($row = $result->fetch_row()){
    $monthmount=new MontnMount();
    @$monthmount->typename = $row[0];
    @$monthmount->mount = $row[1];
    $array[]=$monthmount;
  }
  $data=json_encode($array);
  echo $data;
?>