<?php
    session_start();
    $cityname=$_SESSION['cityname'];

    include "page.php";
    include "db_config.php";
    $total =0;
    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else if(empty($_SESSION['user']))
    {
    echo "error!";
    header('location: ../index.html');
    }
    else if ($_SESSION['permission'] == 1 || $_SESSION['permission'] == 4) {
    $sql = "select count(*) from project";
    $result = $db->query($sql);
    $sj = $result->fetch_row();
    $total = $sj[0];
    $page = new Page($total,20,"",true);
    $sqlshow = "select * from project ".$page->limit;
    $resultall = $db->query($sqlshow);
    }
    else
    {
    $cityname = $_SESSION['cityname'];
    $sql = "select count(*) from project WHERE CityName = '$cityname' ";
    $result = $db->query($sql);
    $sj = $result->fetch_row();
    $total = $sj[0];
    $page = new Page($total,20,"",true);
    $sqlshow = "select * from project WHERE CityName = '$cityname' ".$page->limit;
    $resultall = $db->query($sqlshow);
    }
    if(empty($sql)||empty($sqlshow))
    {
      echo "error!";
      exit;
    }
    else
    {
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
          <h1>全国公园项目记录查询</h1>
          <div class="tbl-header">   
          <table>
          <thead>
          <tr>
          <th>项目名</th>
          <th>公园名</th>
          <th>城市名</th>
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
            <td>{$row[3]}</td>
            <td>{$row[4]}</td>
            </tr>";
        }
        
        echo '<tr><td colspan="3">'.$page->fpage().'</td></tr>';
        
        echo '</tbody>
              </table>
              </div>
              </section>
              <script src="js/jquery.mintable.js"></script>
              <script  src="js/indextable.js"></script>
              </body>
              </html>'; 
       mysqli_close($db);   
    }