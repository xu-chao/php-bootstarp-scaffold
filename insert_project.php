<?php
    header("Content-Type:text/html;charset=utf-8");

    @$ProjectName=$_REQUEST['ProjectName'];
    @$ProjectInfo=$_REQUEST['ProjectInfo'];
    @$CityName=$_REQUEST['CityName'];
    @$ParkName=$_REQUEST['ParkName'];

    include "db_config.php";
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {
    $issql = "SELECT COUNT(*) FROM project WHERE ProjectName = '$ProjectName' AND CityName = '$CityName' AND ParkName = '$ParkName'";
    $isres = mysqli_query($db,$issql);
    $row = mysqli_fetch_row($isres);
    $isproject = $row[0];
    if(!$isproject)
    {    
       $sql = "INSERT INTO `mrm`.`project` (`ProjectID`, `ProjectName`, `ProjectInfo`, `ParkName`, `CityName`) 
           VALUES ('', '$ProjectName', '$ProjectInfo', '$ParkName', '$CityName')";
    }
    else{
       echo "<script>alert('新增数据已经存在，请仔细核查！！！');history.back();</script>";
       exit;
    }
    $res = mysqli_query($db,$sql);	
    if($res){
        mysqli_query($db,"COMMIT");//提交事务
        echo "<script>alert('数据提交成功！！！');history.back();</script>";
     }else{
        mysqli_query($db,"ROLLBACK");//事务回滚
        echo "<script>alert('新增数据已经存在，请仔细核查！！！');history.back();</script>";
     }
        mysqli_query($db,"END");
     }
?>