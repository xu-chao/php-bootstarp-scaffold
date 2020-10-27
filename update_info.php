<?php
    header("Content-Type:text/html;charset=utf-8");

    @$CityName=$_REQUEST['CityName'];
    @$ParkName=$_REQUEST['ParkName'];
    @$ProjectName=$_REQUEST['ProjectName'];
    @$EquipmentType=$_REQUEST['EquipmentType'];
    @$EquipmentLevel=$_REQUEST['EquipmentLevel'];
    @$EquipmentModel=$_REQUEST['EquipmentModel'];
    @$WorkingLife=$_REQUEST['WorkingLife'];
    @$EquipmentWeight=$_REQUEST['EquipmentWeight'];
    @$FactoryNum=$_REQUEST['FactoryNum'];
    @$Manufactor=$_REQUEST['Manufactor'];
    @$ProductionDate=$_REQUEST['ProductionDate'];
    @$RegistrationNum=$_REQUEST['RegistrationNum'];
    @$InstallDate=$_REQUEST['InstallDate'];
    @$NextDate=$_REQUEST['NextDate'];
    @$EndDate=$_REQUEST['EndDate'];
    @$UseOrNo=$_REQUEST['UseOrNo'];
    @$ID=$_REQUEST['ID'];

    include "db_config.php";
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    { 
    $sql = "UPDATE `mrm`.`equipinfo` 
           SET `ID`='$ID', `CityName`='$CityName', 
           `ParkName`='$ParkName', `ProjectName`='$ProjectName', 
           `EquipmentType`='$EquipmentType', `EquipmentLevel`='$EquipmentLevel', `EquipmentModel`='$EquipmentModel', 
           `WorkingLife`='WorkingLife', `EquipmentWeight`='EquipmentWeight', `FactoryNum`='$FactoryNum', 
           `Manufactor`='$Manufactor', `ProductionDate`='$ProductionDate', `RegistrationNum`='$RegistrationNum', 
           `InstallDate`='$InstallDate', `NextDate`='$NextDate', `EndDate`='$EndDate', `UseOrNo`='$UseOrNo'
           WHERE (`ID`='$ID')";         
    $res = mysqli_query($db,$sql);
    if($res){
        mysqli_query($db,"COMMIT");//提交事务
        echo "<script>alert('数据更新成功！！！');history.back();</script>";
     }else{
        mysqli_query($db,"ROLLBACK");//事务回滚
        echo "<script>alert('新增数据更新失败，请仔细核查！！！');history.back();</script>";
     }
        mysqli_query($db,"END");
     }
?>