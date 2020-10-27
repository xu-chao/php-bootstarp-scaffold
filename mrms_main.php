<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>维修记录查询系统</title>
    <link rel="stylesheet" href="css/base.css"> <!--初始化文件-->
    <link rel="stylesheet" href="css/menu.css"> <!--主样式-->
    <link href="css/normal.css" type="text/css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/sanji.js"></script>
    <script language="javascript">
    $(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    $(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
    });  
    </script>
    <script src="js/adapter.js"></script>
</head>
<body style="background-color:#657180;"> 
<div id="all">
    <div class="top">
        <div class="right">
            <strong>
            <span style="color: #1ABC9C"><?php include 'info.php'?>,你好</span>
            </strong>
            <a href="logout.php">退出</a>
        </div>
    </div>
    <div id="menu">
     <div id="ensconce">
        <h2>
            <img src="images/show.png" alt="">
            菜单
        </h2>
     </div>
    <div id="open">
        <div class="navH">
        <img src="images/logo.png" alt="">
        <span><img class="obscure" src="images/show_left.png" alt=""></span>
        </div>
        <div class="navBox">
            <ul>
                <li>
                    <h2 class="obtain">问题添加<i></i></h2>
                      <div class="secondary">
                        <a href="mrms_detail.php"><h3>增加城市</h3></a>
                        <a href="all.php"><h3>增加公园</h3></a>
                        <a href="all.php"><h3>增加项目</h3></a>
                        <a href="all.php"><h3>增加问题</h3></a>                      
                      </div>
                </li>
                <li>
                    <h2 class="obtain">数据查询<i></i></h2>
                      <div class="secondary">
                        <a href="mrms_detail.php"><h3>详细查询</h3></a>
                        <a href="all.php"><h3>总体查询</h3></a>                      
                      </div>
                </li>
                <li>
                    <h2 class="obtain">图表分析<i></i></h2>
                      <div class="secondary">
                        <a href="mrms_zzt.php"><h3>混合分析图</h3></a>
                        <h3>饼状分析图</h3>                        
                      </div>             
                </li> 
                <li>
                    <h2 class="obtain"><a href="index.php">返回首页</a><i></i></h2>             
                </li>  
            </ul>
        </div>
    </div>
    <!--<div class="center">
        <div class="left">
        <?php include "all.php" ?>
    </div>-->
</div>
<script src="js/menu.js"></script>
    <div class="middle">
    <form action="mrms_main_action.php" method="POST">
    <span>城市：</span>
    <select id='s1' style="width:200" name="city"></select>
    <span>公园：</span>
    <select id='s2' style="width:200" name="park"></select>
    <span>项目：</span>
    <select id='s3' style="width:200" name="project"></select>
    <br>
    <br>
    <button type="reset" style="background-color: #00a4ac;width: 60px;height: 30px">修改</button>
    <button type="submit" style="background-color: #00a4ac;width: 60px;height: 30px">确定</button>
    </form>
    <br>
    <form action="mrms_like_action.php" method="POST">
    <span>负责人：</span><input type="text" name="engineer">
    <br>
    <button type="reset" style="background-color: #00a4ac;width: 60px;height: 30px">修改</button>
    <button type="submit" style="background-color: #00a4ac;width: 60px;height: 30px">确定</button>
    </form>
    </div>
</body>
</html>
