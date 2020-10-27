<?php
if(isset($_POST)){
  $i=$_POST['i'];
 
  include "db_config.php";

  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
  $sql = "select ID,PARKNAME from parks where parks.CITY_ID = $i";
  $result = $db->query($sql);
  $data="";
  $array= array();
  class Park{
    public $key;
    public $value;
  }
  while($row = $result->fetch_row()){
    $park=new Park();
    @$park->key = $row[0];
    @$park->value = $row[1];
    $array[]=$park;
  }
  $data=json_encode($array);
  echo $data;
}
