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

    include "db_config.php";
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {
    $issql = "SELECT COUNT(*) FROM tb_equipmentlist WHERE CityName = '$CityName' AND ParkName = '$ParkName' AND ProjectName = '$ProjectName' 
	AND SysType = '$SysType' AND EquName = '$EquName' AND EquType = '$EquType' AND Mount = '$Mount' AND Unit = '$Unit' 
	AND Department = '$Department' AND Beizhu = '$Beizhu' AND BillState = '$BillState' AND BillDate = '$BillDate' 
	AND Advanced = '$Advanced' AND Arrival = '$Arrival' AND Applicant = '$Applicant' AND OddNum = '$OddNum'
    AND Purchaser = '$Purchaser' AND ContractStatus = '$ContractStatus' AND Whip = '$Whip' AND ProductionState = '$ProductionState'
    AND Address = '$Address'";
    $isres = mysqli_query($db,$issql);
    $row = mysqli_fetch_row($isres);
    $isproblem = $row[0];
    if(!$isproblem)
    {    
    $sql = "INSERT INTO `mrm`.`tb_equipmentlist` 
	(`ID`, `CityName`, `ParkName`, `ProjectName`, `SysType`, `EquName`, `EquType`, `Mount`, `Unit`, `Department`, `Beizhu`, `BillState`, `BillDate`, `Advanced`, `Arrival`, `Applicant`, `OddNum`, `Purchaser`, `ContractStatus`, `Whip`, `ProductionState`, `Address`) 
     VALUES 
	 ('', '$CityName', '$ParkName', '$ProjectName', '$SysType', '$EquName', '$EquType', '$Mount', '$Unit', '$Department', '$Beizhu', '$BillState', '$BillDate', '$Advanced', '$Arrival', '$Applicant', '$OddNum', '$Purchaser', '$ContractStatus', '$Whip', '$ProductionState', '$Address')";
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