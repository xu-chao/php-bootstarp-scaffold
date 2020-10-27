<?php
    header("Content-Type:text/html;charset=utf-8");
    
    @$city=$_REQUEST['city'];
    @$park=$_REQUEST['park'];
    @$project=$_REQUEST['project'];

    include "db_config.php";

    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {
        if(!empty($city)&&!empty($park)&&!empty($project))
        {
          $sqlshow = "SELECT * FROM problem,projects,city,parks 
          WHERE parks.CITY_ID=city.U_ID AND projects.P_ID = parks.ID 
          AND problem.PP_ID = projects.B_ID AND parks.ID = $park AND projects.PROJECTNAME = '$project'";
        }
        else if(!empty($city)&&!empty($project))
        {
          $sqlshow = "SELECT * FROM problem,projects,city,parks WHERE parks.CITY_ID=city.U_ID
             AND projects.P_ID = parks.ID 
             AND problem.PP_ID = projects.B_ID AND city.U_ID = $city AND parks.PARKNAME = '$project'";
        }
        else if (!empty($city))
        {
          $sqlshow = "SELECT * FROM problem,projects,parks,city 
           WHERE problem.PP_ID = projects.B_ID AND projects.P_ID = parks.ID 
                 AND parks.CITY_ID = city.U_ID AND city.U_ID = $city";
          $c1 = "select city from city where city.U_ID = $city";
          $result = $db->query($c1);
        }
        else{
          $sqlshow="select * from problem";
          $result;
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
        if(!empty($project)){
        //while($r1 = $result->fetch_row()){
          echo "
          <h1>{$project}项目故障记录查询</h1>
          ";
        //}
      }
      else{
          echo "
          <h1>全国公园故障记录查询</h1>
          ";
      }
        echo '
          <div class="tbl-header">   
          <table border="0">
          <thead>
          <tr>
          <th>上传日期</th>
          <th>问题分类</th>
          <th>详细描述</th>
          <th>负责人</th>
          <th>处理结果</th>
          <th>更换零件</th>
          <th>零件型号</th>
          <th>更换数量</th>
          <th>维修日期</th>
          <th>维修时间</th>
          <th>维修人员</th>
          <th>原因分析</th>
          <th>备注</th>
          <th>是否解决</th>
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
            <td>{$row[16]}</td>
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
    }