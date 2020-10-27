<?php
    header("Content-Type:text/html;charset=utf-8");
    session_start();

    @$user=$_SESSION['user'];
    @$Title=$_REQUEST['Title'];
    @$SmallTitle=$_REQUEST['SmallTitle'];
	@$WTime=$_REQUEST['WTime'];
    @$Cate=$_REQUEST['Cate'];
    @$Context=$_REQUEST['Context'];

    include "db_config.php";
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {
    $sql = "INSERT INTO `mrm`.`artical` (`AID`, `UserName`, `Title`, `SmallTitle`,`WTime`, `Cate`, `Context`) VALUES ('', '$user', '$Title', '$SmallTitle', '$WTime', '$Cate', '$Context')";
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