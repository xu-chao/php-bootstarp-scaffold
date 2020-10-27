<?php
    header("Content-Type:text/html;charset=utf-8");
    
    @$sqlshow='';
    @$CityName=$_REQUEST['CityName'];
    @$ParkName=$_REQUEST['ParkName'];
    @$ProjectName=$_REQUEST['ProjectName'];
    @$PassTime=$_REQUEST['PassTime'];
    @$CTime=$_REQUEST['CTime'];
    @$StartTime=substr($PassTime,0,10);
    @$EndTime=substr($PassTime,16,26);

    include "db_config.php";

    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else if($CTime == 'on')
    {
      if(!empty($CityName)&&!empty($ParkName)&&!empty($ProjectName))
        {
          $sqlshow = "SELECT problemdetail.* FROM problemdetail 
            WHERE ProjectName = '$ProjectName' AND ParkName = '$ParkName' AND CityName = '$ProjectName'
            AND  RepairTime>='$StartTime' AND EndTime<='$EndTime'";
        }
        else if(!empty($CityName)&&!empty($ParkName))
        {
          $sqlshow = "SELECT problemdetail.* FROM problemdetail,project 
            WHERE problemdetail.ProjectName = project.ProjectName
            AND problemdetail.ParkName = project.ParkName
            AND project.ParkName = '$ParkName'
            AND RepairTime>='$StartTime' AND EndTime<='$EndTime'";
        }
        else if(!empty($CityName))
        {
          $sqlshow = "SELECT problemdetail.* FROM problemdetail,project,park,city 
            WHERE problemdetail.ProjectName = project.ProjectName 
            AND problemdetail.ParkName = park.ParkName AND project.ParkName = park.ParkName 
            AND problemdetail.CityName = city.CityName AND park.CityName = city.CityName 
            AND city.CityName = '$CityName' AND  RepairTime>='$StartTime' AND EndTime<='$EndTime'";  
        }
        else if(empty($sqlshow))
        {
           echo "<script>alert('请将查询条件填写完整！！！');history.go(-1);</script>";
           exit;
        }
    }
    else
    {
        if(!empty($CityName)&&!empty($ParkName)&&!empty($ProjectName))
        {
          $sqlshow = "SELECT problemdetail.* FROM problemdetail WHERE ProjectName = '$ProjectName' 
          AND ParkName = '$ParkName' AND CityName = '$CityName'";
        }
        else if(!empty($CityName)&&!empty($ParkName))
        {
          $sqlshow = "SELECT problemdetail.* FROM problemdetail,project 
            WHERE problemdetail.ProjectName = project.ProjectName
            AND problemdetail.ParkName = project.ParkName 
            AND project.ParkName = '$ParkName'";
        }
        else if(!empty($CityName))
        {
          $sqlshow = "SELECT problemdetail.* FROM problemdetail,project,park,city 
            WHERE problemdetail.ProjectName = project.ProjectName 
            AND problemdetail.ParkName = park.ParkName AND project.ParkName = park.ParkName 
            AND problemdetail.CityName = city.CityName AND park.CityName = city.CityName 
            AND city.CityName = '$CityName'";  
        }
        else if(empty($sqlshow))
        {
           echo "<script>alert('请将查询条件填写完整！！！');history.go(-1);</script>";
           exit;
        }
    }
        $resultall = $db->query($sqlshow);
        echo'<!DOCTYPE html>
          <html lang="en">
          <head>
          <meta charset="UTF-8">
          <title>方特万事屋</title>
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="css/reset.mintable.css">
          <link rel="stylesheet" href="css/styletable.css"> 
          </head>
          <body>
          <section>
          ';

        echo "
          <h1>全国公园故障记录查询</h1>
          ";

        echo '
          <div class="tbl-header">   
          <table border="0">
          <thead>
          <tr>
          <th>录入时间</th>
          <th>设备故障时间</th>
          <th>问题分类</th>
          <th>问题概要</th>
          <th>详细描述</th>
          <th>负责人</th>
          <th>更换零件名称</th>
          <th>零件型号</th>
          <th>更换数量</th>
          <th>维修结束时间</th>
          <th>维修持续时间</th>
          <th>维修人员</th>
          <th>原因分析</th>
          <th>结论</th>
          <th>是否疏散</th>
          <th>中断时长</th>
          <th>所属项目</th>
          <th>所属公园</th>
          <th>所属城市</th>
          </tr>
          </thead>
          </table>
          </div>
          <div class="tbl-content">
          <table border="0">
          <tbody>
        ';
               
        while($row = $resultall->fetch_row())
        {
            echo "<tr>
            <td>{$row[1]}</td>
            <td>{$row[2]}</td>
            <td>{$row[3]}</td>
            <td>{$row[4]}</td>
            <td>{$row[5]}</td>
            <td>{$row[6]}</td>
            <td>{$row[7]}</td>
            <td>{$row[8]}</td>
            <td>{$row[9]}</td>
            <td>{$row[10]}</td>
            <td>{$row[11]}</td>
            <td>{$row[12]}</td>
            <td>{$row[13]}</td>
            <td>{$row[14]}</td>
            <td>{$row[15]}</td>
            <td>{$row[16]}</td>
            <td>{$row[17]}</td>
            <td>{$row[18]}</td>
            <td>{$row[19]}</td>
            </tr>";
        }
        
        echo '</tbody>
              </table>
              </div>
              </section>
              <script src="js/jquery.mintable.js"></script>
              <script  src="js/indextable.js"></script>
              </body>
              </html>';   