<?php
if(isset($_POST)){
  $i=$_POST['i'];

  include "db_config.php";

  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
  $sql = "select B_ID,PROJECTNAME from projects where projects.P_ID = $i";
  $result = $db->query($sql);
  $data="";
  $array= array();
  class Project{
    public $key;
    public $value;
  }
  while($row = $result->fetch_row()){
    $project=new Project();
    @$project->key = $row[0];
    @$project->value = $row[1];
    $array[]=$project;
  }
  $data=json_encode($array);
  echo $data;
}
