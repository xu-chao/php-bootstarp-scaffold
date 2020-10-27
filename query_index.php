<?php

    include "db_config.php";

    $db = new mysqli("$mysql_server_name","$mysql_username","$mysql_password","$mysql_database");
    if(mysqli_connect_error())
    {    
        echo "连接失败";  
        exit;
    }
    else
    {
        $sqlshow = "SELECT city.CityName,park.ParkName,count(*) AS mount FROM problemdetail,project,park,city 
           WHERE problemdetail.ProjectName = project.ProjectName 
           AND problemdetail.ParkName = park.ParkName AND project.ParkName = park.ParkName 
           AND problemdetail.CityName = city.CityName AND park.CityName = city.CityName
           GROUP BY park.ParkName ORDER BY mount desc";
    }
        $resultall = $db->query($sqlshow);
        echo'<div class="x_content">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>城市名</th>
                          <th>公园名</th>
                          <th>故障数</th>
                        </tr>
                      </thead>
                      <tbody>
          ';
               
        while($row = $resultall->fetch_row())
        {
            echo "<tr>
            <td>{$row[0]}</td>
            <td>{$row[1]}</td>
            <td>{$row[2]}</td>
            </tr>";
        }
        
        echo '     </tbody>
                </table>
              </div>';   