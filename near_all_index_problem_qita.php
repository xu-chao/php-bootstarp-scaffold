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
    $sqlshow = "SELECT * FROM near_index_problem_qita WHERE CityName = '$cityname'";
    }
  $result = $db->query($sqlshow);
  if(empty($row = $result->fetch_row()))
  {
  $data="";
  $array= array();
  class Mount{
    public $qita;
    public $mount;
  }
    $mount=new Mount();
    @$mount->qita = "city";
    @$mount->mount = 0;
    $array[]=$mount;
    $data=json_encode($array);
    echo $data;
  }
  else
  {
  $result = $db->query($sqlshow);
  $data="";
  $array= array();
  class Mount{
    public $qita;
    public $mount;
  }
  while($row = $result->fetch_row())
  {
    $mount=new Mount();
    @$mount->qita = $row[0];
    @$mount->mount = $row[1];
    $array[]=$mount;
  }
  $data=json_encode($array);
  echo $data;
}
?>