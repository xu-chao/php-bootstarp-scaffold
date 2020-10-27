<?php
    header("Content-Type:text/html;charset=utf-8");

    @$PDTime=$_REQUEST['PDTime'];
    @$RepairTime=$_REQUEST['RepairTime'];
    @$ProblemType=$_REQUEST['ProblemType'];
    @$Problem=$_REQUEST['Problem'];
    @$Info=$_REQUEST['Info'];
    @$Engineer=$_REQUEST['Engineer'];
    @$Product=$_REQUEST['Product'];
    @$ProType=$_REQUEST['ProType'];
    @$Mount=$_REQUEST['Mount'];
    @$EndTime=$_REQUEST['EndTime'];
    @$LastingTime=$_REQUEST['LastingTime'];
    @$RepairPer=$_REQUEST['RepairPer'];
    @$Reason=$_REQUEST['Reason'];
    @$Note=$_REQUEST['Note'];
    @$Evacuate=$_REQUEST['Evacuate'];
    @$DoSolve=$_REQUEST['DoSolve'];
    @$CityName=$_REQUEST['CityName'];
    @$ParkName=$_REQUEST['ParkName'];
    @$ProjectName=$_REQUEST['ProjectName'];
    @$PDID=$_REQUEST['PDID'];

    include "db_config.php";
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    { 
    $sql = "UPDATE `mrm`.`problemdetail` 
           SET `PDID`='$PDID', `PDTime`='$PDTime', 
           `RepairTime`='$RepairTime', `ProblemType`='$ProblemType', 
           `Problem`='$Problem', `Info`='$Info', `Engineer`='$Engineer', 
           `Product`='$Product', `ProType`='$ProType', `Mount`='$Mount', 
           `EndTime`='$EndTime', `LastingTime`='$LastingTime', `RepairPer`='$RepairPer', 
           `Reason`='$Reason', `Note`='$Note', `Evacuate`='$Evacuate', `DoSolve`='$DoSolve', 
           `ProjectName`='$ProjectName', `ParkName`='$ParkName', `CityName`='$CityName'
           WHERE (`PDID`='$PDID')";         
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