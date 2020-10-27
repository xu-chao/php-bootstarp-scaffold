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

    include "db_config.php";
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {
    $issql = "SELECT COUNT(*) FROM equipinfo WHERE CityName = '$CityName' AND ParkName = '$ParkName' AND ProjectName = '$ProjectName' 
	AND EquipmentType = '$EquipmentType' AND EquipmentLevel = '$EquipmentLevel' AND EquipmentModel = '$EquipmentModel' AND WorkingLife = '$WorkingLife' AND EquipmentWeight = '$EquipmentWeight' 
	AND FactoryNum = '$FactoryNum' AND Manufactor = '$Manufactor' AND ProductionDate = '$ProductionDate' AND RegistrationNum = '$RegistrationNum' 
	AND InstallDate = '$InstallDate' AND NextDate = '$NextDate' AND EndDate = '$EndDate' AND UseOrNo = '$UseOrNo'";
    $isres = mysqli_query($db,$issql);
    $row = mysqli_fetch_row($isres);
    $isproblem = $row[0];
    if(!$isproblem)
    {    
    $sql = "INSERT INTO `mrm`.`equipinfo` 
	(`ID`, `CityName`, `ParkName`, `ProjectName`, `EquipmentType`, `EquipmentLevel`, `EquipmentModel`, `WorkingLife`, `EquipmentWeight`, `FactoryNum`, `Manufactor`, `ProductionDate`, `RegistrationNum`, `InstallDate`, `NextDate`, `EndDate`, `UseOrNo`) 
     VALUES 
	 ('', '$CityName', '$ParkName', '$ProjectName', '$EquipmentType', '$EquipmentLevel', '$EquipmentModel', '$WorkingLife', '$EquipmentWeight', '$FactoryNum', '$Manufactor', '$ProductionDate', '$RegistrationNum', '$InstallDate', '$NextDate', '$EndDate', '$UseOrNo')";
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
        echo "<script>alert('添加失败！请仔细检查数据格式或是否存在该项目！');history.back();</script>";
     }
        mysqli_query($db,"END");
     }
?>