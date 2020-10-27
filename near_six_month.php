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
$sqlshow = "
SELECT CONCAT(YEAR(CURDATE()),'年',MONTH(CURDATE()),'月')  AS time,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(YEAR(CURDATE()),'年',MONTH(CURDATE()),'月')
UNION
SELECT CONCAT(IF(MONTH(CURDATE())-1>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-1>0,MONTH(CURDATE())-1,MONTH(CURDATE())-1+12),'月') as TIME ,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(IF(MONTH(CURDATE())-1>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-1>0,MONTH(CURDATE())-1,MONTH(CURDATE())-1+12),'月')
UNION
SELECT CONCAT(IF(MONTH(CURDATE())-2>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-2>0,MONTH(CURDATE())-2,MONTH(CURDATE())-2+12),'月')  as TIME ,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(IF(MONTH(CURDATE())-2>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-2>0,MONTH(CURDATE())-2,MONTH(CURDATE())-2+12),'月') 
UNION
SELECT CONCAT(IF(MONTH(CURDATE())-3>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-3>0,MONTH(CURDATE())-3,MONTH(CURDATE())-3+12),'月')  as TIME ,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(IF(MONTH(CURDATE())-3>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-3>0,MONTH(CURDATE())-3,MONTH(CURDATE())-3+12),'月') 
UNION
SELECT CONCAT(IF(MONTH(CURDATE())-4>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-4>0,MONTH(CURDATE())-4,MONTH(CURDATE())-4+12),'月')  as TIME ,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(IF(MONTH(CURDATE())-4>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-4>0,MONTH(CURDATE())-4,MONTH(CURDATE())-4+12),'月') 
UNION
SELECT CONCAT(IF(MONTH(CURDATE())-5>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-5>0,MONTH(CURDATE())-5,MONTH(CURDATE())-5+12),'月')  as TIME ,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(IF(MONTH(CURDATE())-5>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-5>0,MONTH(CURDATE())-5,MONTH(CURDATE())-5+12),'月') ";
    }
    else
    {
    $sqlshow = "
SELECT CONCAT(YEAR(CURDATE()),'年',MONTH(CURDATE()),'月')  AS time,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(YEAR(CURDATE()),'年',MONTH(CURDATE()),'月') AND CityName = '$cityname'
UNION
SELECT CONCAT(IF(MONTH(CURDATE())-1>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-1>0,MONTH(CURDATE())-1,MONTH(CURDATE())-1+12),'月') as TIME ,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(IF(MONTH(CURDATE())-1>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-1>0,MONTH(CURDATE())-1,MONTH(CURDATE())-1+12),'月') AND CityName = '$cityname'
UNION
SELECT CONCAT(IF(MONTH(CURDATE())-2>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-2>0,MONTH(CURDATE())-2,MONTH(CURDATE())-2+12),'月')  as TIME ,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(IF(MONTH(CURDATE())-2>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-2>0,MONTH(CURDATE())-2,MONTH(CURDATE())-2+12),'月') AND CityName = '$cityname' 
UNION
SELECT CONCAT(IF(MONTH(CURDATE())-3>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-3>0,MONTH(CURDATE())-3,MONTH(CURDATE())-3+12),'月')  as TIME ,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(IF(MONTH(CURDATE())-3>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-3>0,MONTH(CURDATE())-3,MONTH(CURDATE())-3+12),'月') AND CityName = '$cityname' 
UNION
SELECT CONCAT(IF(MONTH(CURDATE())-4>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-4>0,MONTH(CURDATE())-4,MONTH(CURDATE())-4+12),'月')  as TIME ,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(IF(MONTH(CURDATE())-4>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-4>0,MONTH(CURDATE())-4,MONTH(CURDATE())-4+12),'月') AND CityName = '$cityname' 
UNION
SELECT CONCAT(IF(MONTH(CURDATE())-5>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-5>0,MONTH(CURDATE())-5,MONTH(CURDATE())-5+12),'月')  as TIME ,COUNT(PDID) AS mount
FROM problemdetail WHERE CONCAT(YEAR(problemdetail.PDTime),'年',MONTH(problemdetail.PDTime),'月')=CONCAT(IF(MONTH(CURDATE())-5>0,YEAR(CURDATE()),YEAR(CURDATE())-1),'年',IF(MONTH(CURDATE())-5>0,MONTH(CURDATE())-5,MONTH(CURDATE())-5+12),'月') AND CityName = '$cityname' ";
    }       
  $result = $db->query($sqlshow);
  $data="";
  $array= array();
  class MontnMount{
    public $month;
    public $mount;
  }
  while($row = $result->fetch_row()){
    $monthmount=new MontnMount();
    @$monthmount->month = $row[0];
    @$monthmount->mount = $row[1];
    $array[]=$monthmount;
  }
  $data=json_encode($array);
  echo $data;
?>