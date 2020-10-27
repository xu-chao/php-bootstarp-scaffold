<?php
    header("Content-Type:text/html;charset=utf-8");
    
    @$city=$_REQUEST['city'];
    @$park=$_REQUEST['park'];
    @$project=$_REQUEST['project'];
    @$city2=$_REQUEST['city2'];
    @$park2=$_REQUEST['park2'];
    @$project2=$_REQUEST['project2'];

    include "db_config.php";

    $total =0;
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else if(empty($city)||empty($city2)){
            echo "<script>alert('请至少输入一个选项值')</script>";;
      }
    else
    {
      if(!empty($city)&&!empty($park)&&!empty($project))
        {
          $sqlshow = "select * from problem where PP_ID = $project";
          $c1 = "select PARKNAME from parks where parks.ID = $park";
        }
        else if(!empty($city)&&!empty($park))
        {
          $sqlshow = "SELECT * FROM problem,projects WHERE problem.PP_ID = projects.B_ID AND projects.P_ID = $park";
          $c1 = "select PARKNAME from parks where parks.ID = $park";
        }
        else if (!empty($city))
        {

          $sqlshow = "SELECT * FROM problem,projects,parks,city 
           WHERE problem.PP_ID = projects.B_ID AND projects.P_ID = parks.ID 
                 AND parks.CITY_ID = city.U_ID AND city.U_ID = $city";
          $c1 = "select city from city where city.U_ID = $city";
        }

      if(!empty($city2)&&!empty($park2)&&!empty($project2))
        {
          $sqlshow2 = "select * from problem where PP_ID = $project2";
          $c2 = "select PARKNAME from parks where parks.ID = $park2";
        }
        else if(!empty($city2)&&!empty($park2))
        {
          $sqlshow2 = "SELECT * FROM problem,projects WHERE problem.PP_ID = projects.B_ID AND projects.P_ID = $park2";;
          $c2 = "select PARKNAME from parks where parks.ID = $park2";
        }
        else if (!empty($city2))
        {
          $sqlshow2 = "SELECT * FROM problem,projects,parks,city 
           WHERE problem.PP_ID = projects.B_ID AND projects.P_ID = parks.ID 
                 AND parks.CITY_ID = city.U_ID AND city.U_ID = $city2";
          $c2 = "select city from city where city.U_ID = $city2";
        }
        
        $resultall = $db->query($sqlshow);
        $resultall2 = $db->query($sqlshow2);
        $result = $db->query($c1);
        $result2 = $db->query($c2);
        
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

        while($r1 = $result->fetch_row()){
          echo "
          <h1>{$r1[0]}公园故障记录查询</h1>
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
              <section>';

        while($r2 = $result2->fetch_row()){
          echo "
          <h1>{$r2[0]}公园故障记录查询</h1>
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
               
        while($row2 = $resultall2->fetch_row())
        {
            echo "<tr>
            <td>{$row2[1]}</td>
            <td>{$row2[2]}</td>
            <td>{$row2[4]}</td>
            <td>{$row2[5]}</td>
            <td>{$row2[6]}</td>
            <td>{$row2[7]}</td>
            <td>{$row2[8]}</td>
            <td>{$row2[9]}</td>
            <td>{$row2[10]}</td>
            <td>{$row2[11]}</td>
            <td>{$row2[12]}</td>
            <td>{$row2[13]}</td>
            <td>{$row2[14]}</td>
            <td>{$row2[16]}</td>
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