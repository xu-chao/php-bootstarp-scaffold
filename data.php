<?php
include "db_config.php";
include "warning.php";
$city=$_REQUEST['city'];
$park=$_REQUEST['park'];
$db=new mysqli("mysql_server_name","mysql_username","mysql_password","mysql_database");
if(mysqli_connect_error())
{
	echo "连接失败！";
	exit;
}
else {
	if(!empty($city)&&!empty($park))
	{
		
	}
}

?>