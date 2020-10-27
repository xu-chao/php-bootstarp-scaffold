<?php 

  include "db_config.php";

  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
  $sql = "select * from city";
  $result = $db->query($sql);
  $data="";
  $array= array();
  class City{
    public $key;
    public $value;
  }
  while($row = $result->fetch_row()){
    $city=new City();
    @$city->key = $row[0];
    @$city->value = $row[1];
    $array[]=$city;
  }
  $data=json_encode($array);
  echo $data;