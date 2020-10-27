<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>方特万事屋</title>
    <link href="css/action.css" type="text/css" rel="stylesheet" >
  <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="js/jquery.js"></script>
    <script src="js/cloud.js" type="text/javascript"></script>
    <script language="javascript">
  $(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
  $(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
    });  
</script> 
</head>
<body style="background-color:#1c77ac; background-image:url(images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
   <div id="mainBody">
      <div id="cloud1" class="cloud"></div>
      <div id="cloud2" class="cloud"></div>
   </div> 
   <div class="logintop">    
    <span>欢迎进入方特万事屋</span>    
    <ul>
    <li><a href="logout.php">返回首页</a></li>
    <li><a href="help.html">帮助</a></li>
    <li><a href="about.html">关于</a></li>
    </ul>    
   </div>
   <div class="loginbody">
    <span class="systemlogo"></span>
    <div class="loginbox">
       <div id="all">
        <div class="method">
        <p style="font-size: 25px;color: #336666">方特万事屋</p>
        <?php

        //include "db_config.php";

        $username=$_POST['username'];
        $password=$_POST['password'];
        $db = new PDO('mysql:host=localhost;dbname=mrm','root','root');
        $statement=$db->prepare('select * from role where UserName=:username');
        $statement->execute([':username'=>$username]);
        $user=$statement->fetch();
        if(empty($user)){
            echo "角色不存在！";
            echo "<a href=\"index.html\">点击重新登录</a>";
        }
        else if($password != $user['Password']){
            echo "密码不正确！";
            echo "<a href=\"index.html\">点击重新登录</a>";
        }
        else if($user['Permission']==1){
            $_SESSION['user']=$username;
            $_SESSION['permission']=$user['Permission'];
            echo "(".$username.")超级管理员，登录成功！";
            echo "<a href=\"index.php\"><br/>点击进入方特万事屋</a>";
        }
        else if ($user['Permission']==2) {
            $_SESSION['user']=$username;
            $_SESSION['permission']=$user['Permission'];
            echo "(".$username.")管理员，登录成功！";
            echo "<a href=\"".$user['CityNameEN'].".php\"><br/>点击进入方特万事屋</a>";
        }
        else if ($user['Permission']==3) {
            $_SESSION['user']=$username;
            $_SESSION['permission']=$user['Permission'];
            echo "(".$username.")技术中心人员，登录成功！";
            echo "<a href=\"".$user['CityNameEN'].".php\"><br/>点击进入方特万事屋</a>";
        }
        else if ($user['Permission']==4) {
            $_SESSION['user']=$username;
            $_SESSION['permission']=$user['Permission'];
            echo "(".$username.")游客，登录成功！";
            echo "<a href=\"".$user['CityNameEN'].".php\"><br/>点击进入方特万事屋</a>";
        }
        ?>
        </div>
      </div>
    </div>
</div>
</body>
</html>
