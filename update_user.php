<?php
    header("Content-Type:text/html;charset=utf-8");

    @$UserName=$_REQUEST['UserName'];
    @$RoleName=$_REQUEST['RoleName'];
    @$PremissionInfo=$_REQUEST['PremissionInfo'];
    @$StaffID=$_REQUEST['StaffID'];
    @$Tel=$_REQUEST['Tel'];
    @$Email=$_REQUEST['Email'];
    @$CityName=$_REQUEST['CityName'];
    @$RoleID=$_REQUEST['RoleID'];

    include "db_config.php";
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    { 
    $sql = "UPDATE `mrm`.`role` 
           SET `RoleID`='$RoleID', `UserName`='$UserName', 
           `RoleName`='$RoleName', `PremissionInfo`='$PremissionInfo', 
           `StaffID`='$StaffID', `Tel`='$Tel', `Email`='$Email', 
           `CityName`='$CityName'
           WHERE (`RoleID`='$RoleID')";         
    $res = mysqli_query($db,$sql);
    if($res){
        //echo "$sql";
        mysqli_query($db,"COMMIT");//提交事务
        echo "<script>alert('数据更新成功！！！');history.back();</script>";
     }else{
        mysqli_query($db,"ROLLBACK");//事务回滚
        echo "<script>alert('新增数据更新失败，请仔细核查！！！');history.back();</script>";
     }
        mysqli_query($db,"END");
     }
?>