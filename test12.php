<?php 
//数据库连接
$conn=mysql_connect("localhost","root","root");
if(!$conn){
      
    die("对不起，数据库连接失败！").mysql_errno();
}
//选择数据库
mysql_select_db("library");
//sql语句
$sql="SELECT COUNT(*) AS count FROM city";
//执行sql
$query=mysql_query($sql,$conn);
//对结果进行判断
if(mysql_num_rows( $query)){     
   $rs=mysql_fetch_array($query);    
   //统计结果
   $count=$rs[0];    
}else{     
    $count=0;
}
 echo $count;
?>