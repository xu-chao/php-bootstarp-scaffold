<?php
if(isset($_POST)){
  @$i=$_REQUEST['i'];
 
  include "db_config.php";

  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
  $sql = "SELECT park.ParkName FROM park WHERE CityName = '$i'";
  $result = $db->query($sql);
  $data="";
  $array= array();
  class Park{
    public $value;
  }
  while($row = $result->fetch_row()){
    $park=new Park();
    @$park->value = $row[0];
    $array[]=$park;
  }
  $data=json_encode($array);
  echo $data;
}
?>
