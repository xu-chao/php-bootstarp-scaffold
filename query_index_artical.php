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
    $sqlshow = "SELECT * FROM artical ORDER BY AID DESC LIMIT 3";
    }
  $result = $db->query($sqlshow);
  $data="";
  $array= array();
  class Mount{
    public $AID;
    public $UserName;
    public $Title;
    public $SmallTitle;
    public $WTime;
    public $Cate;
    public $Context;
  }
  while($row = $result->fetch_row()){
    $mount=new Mount();
    @$mount->AID = $row[0];
    @$mount->UserName = $row[1];
    @$mount->Title = $row[2];
    @$mount->SmallTitle = $row[3];
    @$mount->WTime = $row[4];
    @$mount->Cate = $row[5];
    @$mount->Context = $row[6];
    $array[]=$mount;
  }
  $data=json_encode($array);
  echo $data;
?>