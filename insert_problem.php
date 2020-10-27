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

    include "db_config.php";
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {
    $issql = "SELECT COUNT(*) FROM problemdetail WHERE PDTime = '$PDTime' AND RepairTime = '$RepairTime' AND ProblemType = '$ProblemType' 
	AND Problem = '$Problem' AND Info = '$Info' AND Engineer = '$Engineer' AND Product = '$Product' AND ProType = '$ProType' 
	AND Mount = '$Mount' AND EndTime = '$EndTime' AND LastingTime = '$LastingTime' AND RepairPer = '$RepairPer' 
	AND Reason = '$Reason' AND Note = '$Note' AND Evacuate = '$Evacuate' AND DoSolve = '$DoSolve' AND ProjectName  = '$ProjectName' 
	AND CityName = '$CityName' AND ParkName = '$ParkName'";
    $isres = mysqli_query($db,$issql);
    $row = mysqli_fetch_row($isres);
    $isproblem = $row[0];
    if(!$isproblem)
    {    
    $sql = "INSERT INTO `mrm`.`problemdetail` 
	(`PDID`, `PDTime`, `RepairTime`, `ProblemType`, `Problem`, `Info`, `Engineer`, `Product`, `ProType`, `Mount`, `EndTime`, `LastingTime`, `RepairPer`, `Reason`, `Note`, `Evacuate`, `DoSolve`, `ProjectName`, `ParkName`, `CityName`) 
     VALUES 
    ('', '$PDTime', '$RepairTime', '$ProblemType', '$Problem', '$Info', '$Engineer', '$Product', '$ProType', '$Mount', '$EndTime', '$LastingTime', '$RepairPer', '$Reason', '$Note', '$Evacuate', '$DoSolve', '$ProjectName', '$ParkName', '$CityName')";
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