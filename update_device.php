<?php
    header("Content-Type:text/html;charset=utf-8");

    @$CityName=$_REQUEST['CityName'];
    @$ParkName=$_REQUEST['ParkName'];
    @$ProjectName=$_REQUEST['ProjectName'];
    @$SysType=$_REQUEST['SysType'];
    @$EquName=$_REQUEST['EquName'];
    @$EquType=$_REQUEST['EquType'];
    @$Mount=$_REQUEST['Mount'];
    @$Unit=$_REQUEST['Unit'];
    @$Department=$_REQUEST['Department'];
    @$Beizhu=$_REQUEST['Beizhu'];
    @$BillState=$_REQUEST['BillState'];
    @$BillDate=$_REQUEST['BillDate'];
    @$Advanced=$_REQUEST['Advanced'];
    @$Arrival=$_REQUEST['Arrival'];
    @$Applicant=$_REQUEST['Applicant'];
    @$OddNum=$_REQUEST['OddNum'];
    @$Purchaser=$_REQUEST['Purchaser'];
    @$ContractStatus=$_REQUEST['ContractStatus'];
    @$Whip=$_REQUEST['Whip'];
    @$ProductionState=$_REQUEST['ProductionState'];
    @$Address=$_REQUEST['Address'];
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
    $sql = "UPDATE `mrm`.`tb_equipmentlist` 
           SET `ID`='$ID', `CityName`='$CityName', 
           `ParkName`='$ParkName', `ProjectName`='$ProjectName', 
           `SysType`='$SysType', `EquName`='$EquName', `EquType`='$EquType', 
           `Mount`='$Mount', `Unit`='$Unit', `Department`='$Department', 
           `Beizhu`='$Beizhu', `BillState`='$BillState', `BillDate`='$BillDate', 
           `Advanced`='$Advanced', `Arrival`='$Arrival', `Applicant`='$Applicant', `OddNum`='$OddNum',`Purchaser`='$Purchaser', `ContractStatus`='$ContractStatus', 
           `Whip`='$Whip', `ProductionState`='$ProductionState', `Address`='$Address'
           WHERE (`ID`='$ID')";         
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