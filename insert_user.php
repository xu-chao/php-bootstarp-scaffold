<?php
    header("Content-Type:text/html;charset=utf-8");

    @$UserName=$_REQUEST['UserName'];
    @$RoleName=$_REQUEST['RoleName'];
    @$Permission=$_REQUEST['Permission'];
    @$PremissionInfo=$_REQUEST['PremissionInfo'];
    @$StaffID=$_REQUEST['StaffID'];
    @$password=$_REQUEST['password'];
    @$Tel=$_REQUEST['Tel'];
    @$email=$_REQUEST['email'];
    @$CityName=$_REQUEST['CityName'];
    @$CityNameEN=$_REQUEST['CityNameEN'];

    include "db_config.php";
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {
    $sql = "INSERT INTO `mrm`.`role` (`RoleID`, `UserName`, `RoleName`, `Permission`, `PremissionInfo`, `StaffID`, `Password`, `Tel`, `Email`, `CityName`, `CityNameEN`) VALUES ('', '$UserName', '$RoleName', '$Permission', '$PremissionInfo', '$StaffID', '$password', '$Tel', '$email', '$CityName', '$CityNameEN')";
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