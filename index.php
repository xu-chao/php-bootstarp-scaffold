<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>华强方特</title>
    <link href="css/index.css" type="text/css" rel="stylesheet" >    
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
    <span>欢迎进入华强方特</span>    
    <ul>
    <li><a href="#">返回首页</a></li>
    <li><a href="help.html">帮助</a></li>
    <li><a href="about.html">关于</a></li>
    </ul>    
    </div>
<div id="all">
    <div class="top">
        <div class="left">
        <strong><p style="font-size: 20px;color: #FFFFFF">华强方特欢迎您：</p></strong>
        </div>
        <div class="right">
            <strong>
            <span style="font-size: 20px;color: #FFFFFF"><?php include 'info.php'?>，你好</span>
            </strong>
            <a href="logout.php">退出</a>
        </div>
    </div>
    <div class="content">
    <a class="card" href="fangte/index.php">
    <div class="front" style="background-image: url(images/main_1.jpg);">      
    </div>
    <div class="back">
      <div>
        <p>公园日常故障数据无处记录?</p>
        <p>我们倾力打造，让管理更方便！</p>
        <button class="button">Click Here</button>
      </div>
    </div>
    </a>
    <a class="card" href="http://10.98.98.80:81">
    <div class="front" style="background-image: url(images/main_2.jpg);">   
    </div>
    <div class="back">
      <div>
        <p>公园日常故障数据无处记录?</p>
        <p>我们倾力打造，让管理更方便！</p>
        <button class="button">Click Here</button>
      </div>
    </div>
    </a>
    <a class="card" href="#!">
    <div class="front" style="background-image: url(images/main_3.jpg);">
      <p>投影记录分析系统<br/>Projection Record Analysis System</p>
    </div>
    <div class="back">
      <div>
        <p>公园日常故障数据无处记录?</p>
        <p>我们倾力打造，让管理更方便！</p>
        <button class="button">Click Here</button>
      </div>
    </div>
    </a>
    <a class="card" href="#!">
    <div class="front" style="background-image: url(images/main_4.jpg);">
      <p>公园电量管理系统<br/>Park Electricity Management System</p>
    </div>
    <div class="back">
      <div>
        <p>公园日常故障数据无处记录?</p>
        <p>我们倾力打造，让管理更方便！</p>
        <button class="button">Click Here</button>
      </div>
    </div>
    </a>
    <a class="card" href="#!">
    <div class="front" style="background-image: url(images/main_5.jpg);">
      <p>数据日志管理系统<br/>Data Log Management System</p>
    </div>
    <div class="back">
      <div>
        <p>公园日常故障数据无处记录?</p>
        <p>我们倾力打造，让管理更方便！</p>
        <button class="button">Click Here</button>
      </div>
    </div>
    </a>
        <a class="card" href="#!">
    <div class="front" style="background-image: url(images/main_6.jpg);">
      <p>4K播放器同步系统<br/>4K Player Synchronization System</p>
    </div>
    <div class="back">
      <div>
        <p>公园日常故障数据无处记录?</p>
        <p>我们倾力打造，让管理更方便！</p>
        <button class="button">Click Here</button>
      </div>
    </div>
    </a>
    </div>
</div>
</body>
</html>
