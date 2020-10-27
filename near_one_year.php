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
SELECT month,SUM(mount) AS mount
FROM 
(
SELECT SUBSTRING(PDTime, 6, 2) AS month,COUNT(PDID) AS mount
FROM problemdetail
WHERE year(problemdetail.PDTime)=year(date_sub(now(),interval 1 year))
GROUP BY SUBSTRING(PDTime, 6, 2)
UNION
SELECT '01' as month,'0' as mount
union  
SELECT '02' as month,'0' as mount
union  
SELECT '03' as month,'0' as mount
  union  
SELECT '04' as month,'0' as mount
  union  
SELECT '05' as month,'0' as mount
union  
SELECT '06' as month,'0' as mount
  union  
SELECT '07' as month,'0' as mount
union  
SELECT '08' as month,'0' as mount
  union  
SELECT '09' as month,'0' as mount
  union  
SELECT '10' as month,'0' as mount
  union  
SELECT '11' as month,'0' as mount
   union  
SELECT '12' as month,'0' as mount
) monthmount
GROUP BY monthmount.month
ORDER BY monthmount.month";
    }
    else
    {
$sqlshow = "
SELECT month,SUM(mount) AS mount
FROM 
(
SELECT SUBSTRING(PDTime, 6, 2) AS month,COUNT(PDID) AS mount
FROM problemdetail
WHERE year(problemdetail.PDTime)=year(date_sub(now(),interval 1 year)) AND CityName = '$cityname'
GROUP BY SUBSTRING(PDTime, 6, 2)
UNION
SELECT '01' as month,'0' as mount
union  
SELECT '02' as month,'0' as mount
union  
SELECT '03' as month,'0' as mount
  union  
SELECT '04' as month,'0' as mount
  union  
SELECT '05' as month,'0' as mount
union  
SELECT '06' as month,'0' as mount
  union  
SELECT '07' as month,'0' as mount
union  
SELECT '08' as month,'0' as mount
  union  
SELECT '09' as month,'0' as mount
  union  
SELECT '10' as month,'0' as mount
  union  
SELECT '11' as month,'0' as mount
   union  
SELECT '12' as month,'0' as mount
) monthmount
GROUP BY monthmount.month
ORDER BY monthmount.month";
    }
  $result = $db->query($sqlshow);
  $data="";
  $array= array();
  class MontnMount{
    public $mount;
  }
  while($row = $result->fetch_row()){
    $monthmount=new MontnMount();
    @$monthmount->mount = $row[1];
    $array[]=$monthmount;
  }
  $data=json_encode($array);
  echo $data;
?>