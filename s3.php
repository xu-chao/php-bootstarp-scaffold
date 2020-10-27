<?php
if(isset($_POST)){
  @$i=$_REQUEST['i'];

  include "db_config.php";

  $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
  $sql = "SELECT project.ProjectName FROM project WHERE project.ParkName = '$i'";
  $result = $db->query($sql);
  $data="";
  $array= array();
  class Project{
    public $value;
  }
  while($row = $result->fetch_row()){
    $project=new Project();
    @$project->value = $row[0];
    $array[]=$project;
  }
  $data=json_encode($array);
  echo $data;
}
